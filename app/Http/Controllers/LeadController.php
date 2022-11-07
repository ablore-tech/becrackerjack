<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $lead = new Lead();
        $lead->name = $request->name;
        $lead->email = $request->email;
        $lead->number = $request->number;
        $lead->is_parent = $request->parent ? 1 : 0;
        $lead->vertical_id = $request->vertical_id;
        $lead->college_subject_id = $request->college_subject_id ? $request->college_subject_id : null;
        $lead->language_id = $request->language_id ? $request->language_id : null;
        $lead->board_id = $request->boardId ? $request->boardId : null;
        $lead->school_class_id = $request->schoolClassId ? $request->schoolClassId : null;
        $lead->subject_id = $request->subjectId ? $request->subjectId : null;

        $lead->save();
        
        return redirect()->route('thank-you');
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
        //
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
