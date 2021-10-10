<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTemplateRequest;
use App\Http\Requests\UpdateTemplateRequest;
use App\Repositories\TemplateRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Status;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Response;

class TemplateController extends AppBaseController
{
    /** @var  TemplateRepository */
    private $templateRepository;

    public function __construct(TemplateRepository $templateRepo)
    {
        $this->templateRepository = $templateRepo;
    }

    /**
     * Display a listing of the Template.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $templates = $this->templateRepository->all();

        return view('templates.index')
            ->with('templates', $templates);
    }

    /**
     * Show the form for creating a new Template.
     *
     * @return Response
     */
    public function create()
    {
        return view('templates.create',[
            'statuses'  => Status::all()
        ]);
    }

    /**
     * Store a newly created Template in storage.
     *
     * @param CreateTemplateRequest $request
     *
     * @return Response
     */
    public function store(CreateTemplateRequest $request)
    {
        $input = $request->all();

        $template = $this->templateRepository->create($input);

        Toastr::success('Thêm mẫu tin nhắn thành công.');

        return redirect(route('admin.templates.index'));
    }

    /**
     * Display the specified Template.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $template = $this->templateRepository->find($id);

        if (empty($template)) {
            Toastr::error('Không tìm thấy mẫu tin nhắn');

            return redirect(route('admin.templates.index'));
        }

        return view('templates.show')->with('template', $template);
    }

    /**
     * Show the form for editing the specified Template.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $template = $this->templateRepository->find($id);

        if (empty($template)) {
            Toastr::error('Không tìm thấy mẫu tin nhắn');

            return redirect(route('admin.templates.index'));
        }

        return view('templates.edit')->with('template', $template);
    }

    /**
     * Update the specified Template in storage.
     *
     * @param int $id
     * @param UpdateTemplateRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTemplateRequest $request)
    {
        // dd('ok');
        $template = $this->templateRepository->find($id);

        if (empty($template)) {
            Toastr::error('Không tìm thấy mẫu tin nhắn');

            return redirect(route('admin.templates.index'));
        }

        // dd($template);

        $template = $this->templateRepository->update($request->all(), $id);

        Toastr::success('Cập nhật mẫu tin nhắn thành công.');

        return redirect(route('admin.templates.index'));
    }

    /**
     * Remove the specified Template from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $template = $this->templateRepository->find($id);

        if (empty($template)) {
            Toastr::error('Không tìm thấy mẫu tin nhắn');

            return redirect(route('admin.templates.index'));
        }

        $this->templateRepository->delete($id);

        Toastr::success('Xóa mẫu tin nhắn thành công.');

        return redirect(route('admin.templates.index'));
    }
}
