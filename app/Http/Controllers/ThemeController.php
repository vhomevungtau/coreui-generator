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


    public function index(Request $request)
    {
        $theme = $this->themeRepository->find(Auth::user()->theme->id);

        return view('themes.edit')
            ->with('theme', $theme);
    }

    public function store(CreateThemeRequest $request)
    {
        $input = $request->all();

        if ($request->theme == "on") {
            $input['theme'] = 0;
        }else{
            $input['theme'] = 1;
        }

        Auth::user()->theme->update($input);

        Toastr::success('Cập nhật giao diện thành công.');

        return redirect(route('admin.themes.index'));
    }

   }
