<?php

namespace App\Http\Controllers;

use Response;
use Illuminate\Http\Request;
use App\Repositories\PermissionRepository;
use App\Http\Controllers\AppBaseController;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\Http\Requests\CreatePermissionRequest;
use App\Http\Requests\UpdatePermissionRequest;
use Brian2694\Toastr\Facades\Toastr;

class PermissionController extends AppBaseController
{
    /** @var  PermissionRepository */
    private $permissionRepository;

    public function __construct(PermissionRepository $permissionRepo)
    {
        $this->permissionRepository = $permissionRepo;
    }

    /**
     * Display a listing of the Permission.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $permissions = $this->permissionRepository->all();

        return view('permissions.index')
            ->with('permissions', $permissions);
    }

    /**
     * Show the form for creating a new Permission.
     *
     * @return Response
     */
    public function create()
    {
        return view('permissions.create');
    }

    /**
     * Store a newly created Permission in storage.
     *
     * @param CreatePermissionRequest $request
     *
     * @return Response
     */
    public function store(CreatePermissionRequest $request)
    {
        $input = $request->all();

        $permission = $this->permissionRepository->create($input);

        Toastr::success('Thêm quyền hạn thành công.');

        return redirect(route('admin.permissions.index'));
    }

    /**
     * Display the specified Permission.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $permission = $this->permissionRepository->find($id);

        if (empty($permission)) {
            Toastr::error('Không tìm thấy quyền hạn');

            return redirect(route('admin.permissions.index'));
        }

        return view('permissions.show')->with('permission', $permission);
    }

    /**
     * Show the form for editing the specified Permission.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $permission = $this->permissionRepository->find($id);

        if (empty($permission)) {
            Toastr::error('Không tìm thấy quyền hạn');

            return redirect(route('admin.permissions.index'));
        }

        return view('permissions.edit')->with('permission', $permission);
    }

    /**
     * Update the specified Permission in storage.
     *
     * @param int $id
     * @param UpdatePermissionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePermissionRequest $request)
    {
        $permission = $this->permissionRepository->find($id);

        if (empty($permission)) {
            Toastr::error('Không tìm thấy quyền hạnd');

            return redirect(route('admin.permissions.index'));
        }

        $permission = $this->permissionRepository->update($request->all(), $id);

        Toastr::success('Cập nhật quyền hạn thành công.');

        return redirect(route('admin.permissions.index'));
    }

    /**
     * Remove the specified Permission from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $permission = $this->permissionRepository->find($id);

        if (empty($permission)) {
            Toastr::error('Không tìm thấy quyền hạn');

            return redirect(route('admin.permissions.index'));
        }

        $this->permissionRepository->delete($id);

        Toastr::success('Xóa quyền hạn thành công.');

        return redirect(route('admin.permissions.index'));
    }
}
