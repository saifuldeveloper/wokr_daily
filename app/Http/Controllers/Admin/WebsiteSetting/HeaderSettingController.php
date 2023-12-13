<?php

namespace App\Http\Controllers\Admin\WebsiteSetting;

use App\Http\Controllers\Controller;
use App\Repositories\LanguageRepository;
use App\Repositories\SettingRepository;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HeaderSettingController extends Controller
{
    protected $setting;

    protected $language;

    public function __construct(SettingRepository $setting, LanguageRepository $language)
    {
        $this->setting  = $setting;
        $this->language = $language;
    }

    public function headerTopbar(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('backend.admin.website_setting.header_content.topbar');
    }

    public function headerLogo(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('backend.admin.website_setting.header_content.logo');
    }

    public function headerMenu(Request $request): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $languages     = app('languages');
        $lang          = $request->site_lang ? $request->site_lang : App::getLocale();
        $menu_language = headerFooterMenu('header_menu', $lang);

        return view('backend.admin.website_setting.header_content.menu', compact('languages', 'lang', 'menu_language'));
    }

    public function updateHeaderMenu(Request $request): \Illuminate\Http\JsonResponse
    {
        if (isDemoMode()) {
            $data = [
                'status' => 'danger',
                'error'  => __('this_function_is_disabled_in_demo_server'),
                'title'  => 'error',
            ];

            return response()->json($data);
        }

        try {
            $this->setting->update($request);
            Toastr::success(__('update_successful'));
            $data = [
                'success' => __('update_successful'),
            ];

            return response()->json($data);
        } catch (\Exception $e) {
            $data = [
                'error' => $e->getMessage(),
            ];

            return response()->json($data);
        }
    }
}
