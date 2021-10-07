<?php

namespace App\Http\Controllers;

use Response;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use App\Repositories\ThemeRepository;
use App\Http\Requests\CreateThemeRequest;
use App\Http\Requests\UpdateThemeRequest;
use App\Http\Controllers\AppBaseController;

class ThemeController extends AppBaseController
{
    /** @var  ThemeRepository */
    private $themeRepository;

    public function __construct(ThemeRepository $themeRepo)
    {
        $this->themeRepository = $themeRepo;
    }

    /**
     * Display a listing of the Theme.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $theme = $this->themeRepository->find(Auth::user()->theme->id);

        return view('themes.edit')
            ->with('theme', $theme);
    }

    /**
     * Show the form for creating a new Theme.
     *
     * @return Response
     */
    public function create()
    {
        return view('themes.create');
    }

    /**
     * Store a newly created Theme in storage.
     *
     * @param CreateThemeRequest $request
     *
     * @return Response
     */
    public function store(CreateThemeRequest $request)
    {
        $input = $request->all();

        if ($request->theme == "on") {
            $input['theme'] = 0;
        }else{
            $input['theme'] = 1;
        }

        Auth::user()->theme->update($input);

        Toastr::success('Theme saved successfully.');

        return redirect(route('admin.themes.index'));
    }

    /**
     * Display the specified Theme.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $theme = $this->themeRepository->find($id);

        if (empty($theme)) {
            Toastr::error('Theme not found');

            return redirect(route('themes.index'));
        }

        return view('themes.show')->with('theme', $theme);
    }

    /**
     * Show the form for editing the specified Theme.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $theme = $this->themeRepository->find($id);

        if (empty($theme)) {
            Toastr::error('Theme not found');

            return redirect(route('themes.index'));
        }

        return view('themes.edit')->with('theme', $theme);
    }

    /**
     * Update the specified Theme in storage.
     *
     * @param int $id
     * @param UpdateThemeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateThemeRequest $request)
    {
        $theme = $this->themeRepository->find($id);

        if (empty($theme)) {
            Toastr::error('Theme not found');

            return redirect(route('themes.index'));
        }

        $theme = $this->themeRepository->update($request->all(), $id);

        Toastr::success('Theme updated successfully.');

        return redirect(route('themes.index'));
    }

    /**
     * Remove the specified Theme from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $theme = $this->themeRepository->find($id);

        if (empty($theme)) {
            Toastr::error('Theme not found');

            return redirect(route('themes.index'));
        }

        $this->themeRepository->delete($id);

        Toastr::success('Theme deleted successfully.');

        return redirect(route('themes.index'));
    }
}
