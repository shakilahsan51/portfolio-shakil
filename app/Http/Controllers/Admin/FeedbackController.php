<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\FeedbackDataTable;
use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;

use function Termwind\render;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(FeedbackDataTable $dataTable)
    {
        return $dataTable->render('admin.feedback.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.feedback.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name'=> ['required', 'max:50'],
            'position'=>['required', 'max:100'],
            'description'=>['required','max:1000']
        ]);

    
        // নতুন Feedback অবজেক্ট তৈরি
        $feedback = new Feedback();

        // ডেটা সেট করা হচ্ছে
        $feedback->name = $request->name;
        $feedback->position = $request->position;
        $feedback->description = $request->description;

        // ডাটাবেজে সেভ করা হচ্ছে
        $feedback->save();


        toastr()->success('Item Created successfully');
        return redirect()->route('admin.feedback.index');
        
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
        $feedback = Feedback::findOrFail($id);
        return view('admin.feedback.edit',compact('feedback'));
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
         // dd($request->all());
        $request->validate([
            'name'=> ['required', 'max:50'],
            'position'=>['required', 'max:100'],
            'description'=>['required','max:1000']
        ]);

    
        // নতুন Feedback অবজেক্ট তৈরি
        $feedback = Feedback::findOrFail($id);

        // ডেটা সেট করা হচ্ছে
        $feedback->name = $request->name;
        $feedback->position = $request->position;
        $feedback->description = $request->description;

        // ডাটাবেজে সেভ করা হচ্ছে
        $feedback->save();


        toastr()->success('Item Updated successfully');
        return redirect()->route('admin.feedback.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feedback = Feedback::findOrFail($id);
        $feedback->delete();
    }
}
