<?php

namespace App\Http\Controllers;

use Response;
use Illuminate\Http\Request;
use App\Repositories\ColorRepository;
use App\Http\Requests\CreateColorRequest;
use App\Http\Requests\UpdateColorRequest;
use App\Http\Controllers\AppBaseController;
use Brian2694\Toastr\Facades\Toastr;

class ColorController extends AppBaseController
{
    /** @var  ColorRepository */
    private $colorRepository;

    public function __construct(ColorRepository $colorRepo)
    {
        $this->colorRepository = $colorRepo;
    }

    /**
     * Display a listing of the Color.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $colors = $this->colorRepository->all();

        return view('colors.index')
            ->with('colors', $colors);
    }

    /**
     * Show the form for creating a new Color.
     *
     * @return Response
     */
    public function create()
    {
        return view('colors.create');
    }

    /**
     * Store a newly created Color in storage.
     *
     * @param CreateColorRequest $request
     *
     * @return Response
     */
    public function store(CreateColorRequest $request)
    {
        $input = $request->all();

        $color = $this->colorRepository->create($input);

        Toastr::success('Color saved successfully.');

        return redirect(route('admin.colors.index'));
    }

    /**
     * Display the specified Color.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $color = $this->colorRepository->find($id);

        if (empty($color)) {
            Toastr::error('Color not found');

            return redirect(route('admin.colors.index'));
        }

        return view('colors.show')->with('color', $color);
    }

    /**
     * Show the form for editing the specified Color.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $color = $this->colorRepository->find($id);

        if (empty($color)) {
            Toastr::error('Color not found');

            return redirect(route('admin.colors.index'));
        }

        return view('colors.edit')->with('color', $color);
    }

    /**
     * Update the specified Color in storage.
     *
     * @param int $id
     * @param UpdateColorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateColorRequest $request)
    {
        $color = $this->colorRepository->find($id);

        if (empty($color)) {
            Toastr::error('Color not found');

            return redirect(route('admin.colors.index'));
        }

        $color = $this->colorRepository->update($request->all(), $id);

        Toastr::success('Color updated successfully.');

        return redirect(route('admin.colors.index'));
    }

    /**
     * Remove the specified Color from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $color = $this->colorRepository->find($id);

        if (empty($color)) {
            Toastr::error('Color not found');

            return redirect(route('admin.colors.index'));
        }

        $this->colorRepository->delete($id);

        Toastr::success('Color deleted successfully.');

        return redirect(route('admin.colors.index'));
    }
}
