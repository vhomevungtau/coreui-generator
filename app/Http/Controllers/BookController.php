<?php

namespace App\Http\Controllers;

use Response;
use App\Models\Server;
use App\Models\Status;
use Illuminate\Http\Request;
use App\Repositories\BookRepository;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Http;
use App\Http\Requests\UpdateBookRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Book;

class BookController extends AppBaseController
{
    /** @var  BookRepository */
    private $bookRepository;

    public function __construct(BookRepository $bookRepo)
    {
        $this->bookRepository = $bookRepo;
    }

    /**
     * Display a listing of the Book.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $books = $this->bookRepository->all();

        return view('books.index')
            ->with('books', $books);
    }


    /**
     * Show the form for editing the specified Book.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $book = $this->bookRepository->find($id);

        if (empty($book)) {
            Toastr::error('Không tìm thấy lịch');

            return redirect(route('admin.books.index'));
        }

        return view('books.edit',[
            'book'      => $book,
            'statuses'  => Status::where('type','book')->get()
        ]);
    }

    /**
     * Update the specified Book in storage.
     *
     * @param int $id
     * @param UpdateBookRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBookRequest $request)
    {
        $book = $this->bookRepository->find($id);

        if (empty($book)) {
            Toastr::error('Không tìm thấy lịch');

            return redirect(route('admin.books.index'));
        }

        $request['date']  = date('Y-m-d', strtotime($request->date));

        $book = $this->bookRepository->update($request->all(), $id);

        // Send sms
        $data = Server::first()->attributesToArray();
        $url = $data['url'];
        $data['number'] = $book->order->user->phone;
        $time = date('H:m', strtotime($book->time)) . ' phút';
        $date = date('d-m-Y', strtotime($book->date));
        $username = $book->order->user->profile->username;

        if ($book->status->id == 210007 ||$book->status->id == 210009) {
            $data['message']    = sprintf($book->status->template->content, $time, $date);
        } elseif ($book->status->id == 210008) {
            $data['message']    = sprintf($book->status->template->content, $username);
        }else{
            $number = Book::where('order_id',$book->order_id)
                    ->where('status_id',210010)
                    ->count();
            $data['message']    = sprintf($book->status->template->content, $username,$number);
        }

        Http::get($url, $data);

        Toastr::success('Cập nhật lịch thành công.');

        return redirect(route('admin.books.index'));
    }

    /**
     * Remove the specified Book from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $book = $this->bookRepository->find($id);

        if (empty($book)) {
            Toastr::error('Không tìm thấy lịch');

            return redirect(route('admin.books.index'));
        }

        $this->bookRepository->delete($id);

        Toastr::success('Xóa lịch thành công.');

        return redirect(route('admin.books.index'));
    }
}
