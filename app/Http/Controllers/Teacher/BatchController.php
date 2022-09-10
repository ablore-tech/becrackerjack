<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Batch;
use App\Models\Board;
use App\Models\SchoolClass;
use App\Models\Subject;
use Illuminate\Http\Request;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('teacher.batch.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $boards = Board::all();
        $schoolClasses = SchoolClass::all();
        $subjects = Subject::all();
        return view('teacher.batch.add', compact(['boards', 'schoolClasses', 'subjects']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $batch = Batch::create([
            'vertical_id' => $request->input('vertical'),
            'board_id' => $request->input('board'),
            'school_class_id' => $request->input('school_class'),
            'subject_id' => $request->input('subject'),
            'days' => json_encode($request->input('days')),
            'start_time' => $request->input('from_time'),
            'end_time' => $request->input('to_time'),
            'price' => $request->input('amount')
        ]);

        return response()->json($batch);
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
