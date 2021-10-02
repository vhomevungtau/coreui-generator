<?php

namespace App\Http\Controllers;

use Response;
use App\Models\Tag;
use App\Models\Role;
use App\Models\User;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Controllers\AppBaseController;
use Haruncpi\LaravelIdGenerator\IdGenerator;


class UserController extends AppBaseController
{
    /** @var $userRepository UserRepository */
    private $userRepository;

    public function __construct(UserRepository $userRepo)
    {
        $this->userRepository = $userRepo;
    }

    /**
     * Display a listing of the User.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $users = $this->userRepository->all();

        return view('users.index',[
            'users' =>$users,
        ]);
    }

    /**
     * Show the form for creating a new User.
     *
     * @return Response
     */
    public function create()
    {
        $tags = Tag::all();

        return view('users.create',[
            'roles' => Role::all(),
            'tags'  => $tags
        ]);
    }

    /**
     * Store a newly created User in storage.
     *
     * @param CreateUserRequest $request
     *
     * @return Response
     */
    public function store(CreateUserRequest $request)
    {
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $input['id'] = IdGenerator::generate(['table' => 'users', 'length' => 10, 'prefix' => date('y')]);
        $user = $this->userRepository->create($input);

        // Role
        $user = $this->userRepository->find($input['id']);
        $user->assignRole($input['role']);

        // Tag
        $user->tags()->sync($request->tag);

        Flash::success('Thêm người dùng thành công');

        return redirect(route('admin.users.index'));
    }

    /**
     * Display the specified User.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $user = $this->userRepository->find($id);

        // $user =

        // dd($user);

        if (empty($user)) {
            Flash::error('Không tìm thấy người dùng');

            return redirect(route('admin.users.index'));
        }

        return view('users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified User.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $user = $this->userRepository->find($id);

        $userRole = $user->roles()->pluck('id','id')->all();

        $roles = Role::all();

        $tags = Tag::all();

        $userTag = $user->tags()->pluck('id','id')->all();


        if (empty($user)) {
            Flash::error('Không tìm thấy người dùng');

            return redirect(route('admin.users.index'));
        }

        return view('users.edit',[
            'user'      => $user,
            'roles'     => $roles,
            'userRole'  => $userRole,
            'tags'      => $tags,
            'userTag'  => $userTag
        ]);
    }

    /**
     * Update the specified User in storage.
     *
     * @param int $id
     * @param UpdateUserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserRequest $request)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error('Không tìm thấy người dùng');

            return redirect(route('admin.users.index'));
        }
        $input =  $request->all();
        if (!empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            unset($input['password']);
        }
        $user = $this->userRepository->update($input, $id);

        // Role
        $user = $this->userRepository->find($id);
        $user->syncRoles($input['role']);

        // Tag
        $user->tags()->sync($request->tag);

        Flash::success('Cập nhật thành công.');

        return redirect(route('admin.users.index'));
    }

    /**
     * Remove the specified User from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error('Không tìm thấy người dùng');

            return redirect(route('admin.users.index'));
        }

        $this->userRepository->delete($id);

        Flash::success('Xóa người dùng thành công.');

        return redirect(route('admin.users.index'));
    }
}
