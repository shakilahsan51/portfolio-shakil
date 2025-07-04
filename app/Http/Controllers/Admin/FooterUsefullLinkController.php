<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\FooterUsefullLinkDataTable;
use App\Http\Controllers\Controller;
use App\Models\FooterUsefullLink;
use Illuminate\Http\Request;

class FooterUsefullLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(FooterUsefullLinkDataTable $dataTable)
    {
        return $dataTable->render('admin.footer-usefull-link.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.footer-usefull-link.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:50'],
            'url' => ['required'],
        ]);

        $link = new FooterUsefullLink();
        $link->name = $request->name;
        $link->url = $request->url;
        $link->save();


        toastr()->success('Data Created successfully');
        return redirect()->route('admin.footer-usefull-link.index');
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
        $link = FooterUsefullLink::findOrFail($id);
        return view('admin.footer-usefull-link.edit', compact('link'));
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
            'name' => ['max:50'],
            'url' => ['max:200'],
        ]);

        $link = FooterUsefullLink::findOrFail($id);
        $link->name = $request->name;
        $link->url = $request->url;
        $link->save();


        toastr()->success('Data Updated successfully');
        return redirect()->route('admin.footer-usefull-link.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $link = FooterUsefullLink::findOrFail($id);
        $link->delete();
    }
}
