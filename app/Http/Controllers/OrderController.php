<?php

namespace App\Http\Controllers;

use Response;
use App\Models\Book;
use App\Models\User;
use App\Models\Price;
use App\Models\Status;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Repositories\OrderRepository;
use App\Http\Requests\CreateBookRequest;
use App\Http\Requests\CreateOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Http\Controllers\AppBaseController;

class OrderController extends AppBaseController
{
    /** @var  OrderRepository */
    private $orderRepository;

    public function __construct(OrderRepository $orderRepo)
    {
        $this->orderRepository = $orderRepo;
    }

    /**
     * Display a listing of the Order.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $orders = $this->orderRepository->all();

        return view('orders.index')
            ->with('orders', $orders);
    }

    /**
     * Show the form for creating a new Order.
     *
     * @return Response
     */
    public function create()
    {
        $users      = User::all();
        $prices     = Price::all();
        $statuses   = Status::all();

        return view('orders.create',[
            'users'     => $users,
            'prices'    => $prices,
            'statuses'  => $statuses
        ]);
    }

    /**
     * Store a newly created Order in storage.
     *
     * @param CreateOrderRequest $request
     *
     * @return Response
     */
    public function store(CreateOrderRequest $request)
    {
        $input = $request->all();

        $price = Price::find($request->price_id)->price;

        $input['total'] = (Double)$price - ((Double)$price * (Double)$request->discount);


        $order = $this->orderRepository->create($input);

        Toastr::success('Thêm đơn hàng thành công.');

        return redirect(route('admin.orders.index'));
    }

    /**
     * Display the specified Order.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $order = $this->orderRepository->find($id);


        if (empty($order)) {
            Toastr::error('Không tìm thấy đơn hàng');

            return redirect(route('admin.orders.index'));
        }

        return view('orders.show')->with('order', $order);
    }

    /**
     * Show the form for editing the specified Order.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $order = $this->orderRepository->find($id);

        $users      = User::all();
        $prices     = Price::all();
        $statuses   = Status::all();

        if (empty($order)) {
            Toastr::error('Không tìm thấy đơn hàng');

            return redirect(route('admin.orders.index'));
        }

        return view('orders.edit',[
            'order'     => $order,
            'users'     => $users,
            'prices'    => $prices,
            'statuses'    => $statuses
        ]);
    }

    /**
     * Update the specified Order in storage.
     *
     * @param int $id
     * @param UpdateOrderRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOrderRequest $request)
    {
        $order = $this->orderRepository->find($id);

        if (empty($order)) {
            Toastr::error('Không tìm thấy đơn hàng');

            return redirect(route('admin.orders.index'));
        }

        $price = Price::find($order->price_id)->price;

        $request['total'] = (Double)$price - ((Double)$price * (Double)$request->discount);

        $order = $this->orderRepository->update($request->all(), $id);

        Toastr::success('Cập nhật đơn hàng thành công.');

        return redirect(route('admin.orders.index'));
    }

    /**
     * Remove the specified Order from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $order = $this->orderRepository->find($id);

        if (empty($order)) {
            Toastr::error('Không tìm thấy đơn hàng');

            return redirect(route('admin.orders.index'));
        }

        $this->orderRepository->delete($id);

        Toastr::success('Xóa đơn hàng thành công.');

        return redirect(route('admin.orders.index'));
    }

    public function getBook($id)
    {
        $order = $this->orderRepository->find($id);

        $statuses   = Status::all();

        if ($order->price->number - $order->books->count() <= 0) {

            Toastr::error('Đơn hàng đã sử dụng hết. Không thể đặt lịch.');
            return redirect(route('admin.orders.index'));
        }

        if (empty($order)) {
            Toastr::error('Không tìm thấy đơn hàng');

            return redirect(route('admin.orders.index'));
        }

        return view('orders.book',[
            'order'     => $order,
            'statuses'    => $statuses
        ]);
    }

    public function postBook(CreateBookRequest $request)
    {
        $input = $request->all();

        $input['date']  = date('Y-m-d', strtotime($request->date));

        // dd($input['date']);

        Book::create($input);

        Toastr::success('Đặt lịch thành công.');

        return redirect(route('admin.books.index'));
    }
}
