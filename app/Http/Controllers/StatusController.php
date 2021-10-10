<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStatusRequest;
use App\Http\Requests\UpdateStatusRequest;
use App\Repositories\StatusRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Color;
use App\Models\Status;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Response;

class StatusController extends AppBaseController
{
    /** @var  StatusRepository */
    private $statusRepository;

    public function __construct(StatusRepository $statusRepo)
    {
        $this->statusRepository = $statusRepo;
    }

    /**
     * Display a listing of the Status.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $statuses = $this->statusRepository->paginate(10);

        return view('statuses.index')
            ->with('statuses', $statuses);
    }

    /**
     * Show the form for creating a new Status.
     *
     * @return Response
     */
    public function create()
    {
        return view('statuses.create',[
            'colors'  => Color::all()
        ]);
    }

    /**
     * Store a newly created Status in storage.
     *
     * @param CreateStatusRequest $request
     *
     * @return Response
     */
    public function store(CreateStatusRequest $request)
    {
        $input = $request->all();

        $status = $this->statusRepository->create($input);

        Toastr::success('Thêm mới trạng thái thành công.');

        return redirect(route('admin.statuses.index'));
    }

    /**
     * Display the specified Status.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $status = $this->statusRepository->find($id);

        if (empty($status)) {
            Toastr::error('Không tìm thấy trạng thái');

            return redirect(route('admin.statuses.index'));
        }

        return view('statuses.show')->with('status', $status);
    }

    /**
     * Show the form for editing the specified Status.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $status = $this->statusRepository->find($id);

        if (empty($status)) {
            Toastr::error('Không tìm thấy trạng thái');

            return redirect(route('admin.statuses.index'));
        }

        return view('statuses.edit',[
            'colors'    => Color::all(),
            'status'    => $status
        ]);
    }

    /**
     * Update the specified Status in storage.
     *
     * @param int $id
     * @param UpdateStatusRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateStatusRequest $request)
    {
        $status = $this->statusRepository->find($id);

        if (empty($status)) {
            Toastr::error('Không tìm thấy trạng thái');

            return redirect(route('admin.statuses.index'));
        }

        $status = $this->statusRepository->update($request->all(), $id);

        Toastr::success('Cập nhật trạng thái thành công.');

        return redirect(route('admin.statuses.index'));
    }

    /**
     * Remove the specified Status from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $status = $this->statusRepository->find($id);

        if (empty($status)) {
            Toastr::error('Không tìm thấy trạng thái');

            return redirect(route('admin.statuses.index'));
        }

        $this->statusRepository->delete($id);

        Toastr::success('Xóa trạng thái thành công.');

        return redirect(route('admin.statuses.index'));
    }
}
