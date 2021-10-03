<?php

namespace App\Http\Controllers;

use Response;
use App\Models\Tag;
use App\Models\Color;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use App\Repositories\TagRepository;
use App\Http\Requests\CreateTagRequest;
use App\Http\Requests\UpdateTagRequest;
use App\Http\Controllers\AppBaseController;

class TagController extends AppBaseController
{
    /** @var  TagRepository */
    private $tagRepository;

    public function __construct(TagRepository $tagRepo)
    {
        $this->tagRepository = $tagRepo;
    }

    /**
     * Display a listing of the Tag.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tags = $this->tagRepository->all();

        return view('tags.index',[
            'tags'      => $tags
        ]);
    }

    /**
     * Show the form for creating a new Tag.
     *
     * @return Response
     */
    public function create()
    {
        return view('tags.create',[
            'colors' => Color::all()
        ]);
    }

    /**
     * Store a newly created Tag in storage.
     *
     * @param CreateTagRequest $request
     *
     * @return Response
     */
    public function store(CreateTagRequest $request)
    {
        $input = $request->all();

        $tag = $this->tagRepository->create($input);

        Flash::success('Thêm thẻ người dùng thành công.');

        return redirect(route('admin.tags.index'));
    }

    /**
     * Display the specified Tag.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tag = $this->tagRepository->find($id);

        if (empty($tag)) {
            Flash::error('Không tìm thấy thẻ');

            return redirect(route('admin.tags.index'));
        }

        return view('tags.show')->with('tag', $tag);
    }

    /**
     * Show the form for editing the specified Tag.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tag = $this->tagRepository->find($id);

        if (empty($tag)) {
            Flash::error('Không tìm thấy thẻ');

            return redirect(route('admin.tags.index'));
        }

        return view('tags.edit',[
            'colors'    => Color::all(),
            'tag'       => $tag
        ]);
    }

    /**
     * Update the specified Tag in storage.
     *
     * @param int $id
     * @param UpdateTagRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTagRequest $request)
    {
        $tag = $this->tagRepository->find($id);

        if (empty($tag)) {
            Flash::error('Không tìm thấy thẻ');

            return redirect(route('admin.tags.index'));
        }

        $tag = $this->tagRepository->update($request->all(), $id);

        Flash::success('Cập nhật thẻ người dùng thành công.');

        return redirect(route('admin.tags.index'));
    }

    /**
     * Remove the specified Tag from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tag = $this->tagRepository->find($id);

        if (empty($tag)) {
            Flash::error('Không tìm thấy thẻ');

            return redirect(route('admin.tags.index'));
        }

        $this->tagRepository->delete($id);

        Flash::success('Xóa thẻ người dùng thành công.');

        return redirect(route('admin.tags.index'));
    }
}
