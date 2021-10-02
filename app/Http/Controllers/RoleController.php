<?php

namespace App\Http\Controllers;

use Response;
use App\Models\Permission;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use App\Repositories\RoleRepository;
use App\Http\Requests\CreateRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use App\Http\Controllers\AppBaseController;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class RoleController extends AppBaseController
{
    /** @var  RoleRepository */
    private $roleRepository;

    public function __construct(RoleRepository $roleRepo)
    {
        $this->roleRepository = $roleRepo;
    }

    /**
     * Display a listing of the Role.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $roles = $this->roleRepository->all();

        return view('roles.index')
            ->with('roles', $roles);
    }

    /**
     * Show the form for creating a new Role.
     *
     * @return Response
     */
    public function create()
    {
        $permissions = Permission::all();

        return view('roles.create',[
            'permissions'   => $permissions,
            'rolePerms'    => []
        ]);
    }

    /**
     * Store a newly created Role in storage.
     *
     * @param CreateRoleRequest $request
     *
     * @return Response
     */
    public function store(CreateRoleRequest $request)
    {
        $input = $request->all();

        $input['id'] = IdGenerator::generate(['table' => 'roles', 'length' => 6, 'prefix' => date('y')]);

        $role = $this->roleRepository->create($input);

        Flash::success('Thêm vai trò thành công.');

        return redirect(route('admin.roles.index'));
    }

    /**
     * Display the specified Role.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $role = $this->roleRepository->find($id);

        if (empty($role)) {
            Flash::error('Không tìm thấy vai trò');

            return redirect(route('admin.roles.index'));
        }

        return view('roles.show')->with('role', $role);
    }

    /**
     * Show the form for editing the specified Role.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $role = $this->roleRepository->find($id);

        $rolePerms = $role->permissions->pluck('id', 'id')->all();

        $permissions = Permission::all();

        if (empty($role)) {
            Flash::error('Không tìm thấy vai trò');

            return redirect(route('admin.roles.index'));
        }

        return view('roles.edit',[
            'role'              => $role,
            'rolePerms'         => $rolePerms,
            'permissions'       => $permissions,
        ]);
    }

    /**
     * Update the specified Role in storage.
     *
     * @param int $id
     * @param UpdateRoleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRoleRequest $request)
    {
        $role = $this->roleRepository->find($id);

        if (empty($role)) {
            Flash::error('Không tìm thấy vai trò');

            return redirect(route('admin.roles.index'));
        }

        $role = $this->roleRepository->update($request->all(), $id);

        // Permission
        $role = $this->roleRepository->find($id);
        $role->syncPermissions($request->permission);

        Flash::success('Cập nhật vai trò thành công.');

        return redirect(route('admin.roles.index'));
    }

    /**
     * Remove the specified Role from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $role = $this->roleRepository->find($id);

        if (empty($role)) {
            Flash::error('Không tìm thấy vai trò');

            return redirect(route('admin.roles.index'));
        }

        $this->roleRepository->delete($id);

        Flash::success('Xóa vai trò thành công.');

        return redirect(route('admin.roles.index'));
    }
}
