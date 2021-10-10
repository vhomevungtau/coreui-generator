<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateServerRequest;
use App\Http\Requests\UpdateServerRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Server;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Response;

class ServerController extends AppBaseController
{

    public function index(Request $request)
    {
        $server = Server::first();

        return view('servers.edit')
            ->with('server', $server);
    }



    public function store(CreateServerRequest $request)
    {
        $input = $request->all();

        $server = Server::create($input);

        Toastr::success('Cập nhật máy chủ tin nhắn thành công.');

        return redirect(route('admin.servers.index'));
    }

}
