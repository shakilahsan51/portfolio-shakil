<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\SkillItemDataTable;
use App\Http\Controllers\Controller;
use App\Models\SkillItem;
use Illuminate\Http\Request;

class SkillItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(SkillItemDataTable $dataTable)
    {
        return $dataTable->render('admin.skill-item.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.skill-item.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //    dd($request->all());
        $request->validate([
            'name'=> ['required','max:200'],
            'percent'=>['required','max:100', 'numeric']
        ]);

        $skill = new SkillItem();
        $skill->name = $request->name;
        $skill->percent = $request->percent;

        $skill->save();


        toastr()->success('Data Created successfully');
        return redirect()->route('admin.skill-item.index');
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
        $skill = SkillItem::findOrFail($id);
        return view('admin.skill-item.edit', compact('skill'));
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
            'name'=> ['max:200'],
            'percent'=>['max:100', 'numeric']
        ]);

        $skill = SkillItem::findOrFail($id);
        $skill->name = $request->name;
        $skill->percent = $request->percent;

        $skill->save();


        toastr()->success('Data Updated successfully');
        return redirect()->route('admin.skill-item.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skillItem = SkillItem::findOrfail($id);
        $skillItem->delete();
    }
}
