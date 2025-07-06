<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\GeneralSetting;
use App\Http\Controllers\Controller;

class GeneralSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = GeneralSetting::first();
        return view('admin.setting.general-settings.index', compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'logo' => ['required', 'max:50000', 'image'],
            'footer_logo' => ['required', 'max:50000', 'image'],
            'favicon' => ['required', 'max:50000', 'image'],
        ]);


        $settings = GeneralSetting::first();

        $logo = handleUpload('logo', $settings);
        $footer_logo = handleUpload('footer_logo', $settings);
        $favicon = handleUpload('favicon', $settings);

        $genarelSetting = new GeneralSetting();
        $genarelSetting->footer_logo = (!empty($footer_logo) ? $footer_logo : $settings->footer_logo);
        $genarelSetting->logo = (!empty($logo) ? $logo : $settings->logo);
        $genarelSetting->favicon = (!empty($favicon) ? $favicon : $settings->favicon);

        $genarelSetting->save();


        toastr()->success('Data Updated successfully');
        return redirect()->back();
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
