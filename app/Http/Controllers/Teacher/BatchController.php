<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Batch;
use App\Models\Board;
use App\Models\CollegeSubject;
use App\Models\Language;
use App\Models\SchoolClass;
use App\Models\Subject;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $batches = Batch::where('user_id', Auth::user()->id)->get();
        return view('teacher.batch.index', compact('batches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $boards = Board::all();
        $schoolClasses = SchoolClass::all();
        $subjects = Subject::all();
        $graduationTypes = config('settings.graduation_type');
        $languageTypes = config('settings.language_type');
        $underSubjects = CollegeSubject::where('graduation_type', config('settings.graduation_type.undergraduate'))->get();
        $postSubjects = CollegeSubject::where('graduation_type', config('settings.graduation_type.postgraduate'))->get();
        $europeanLanguages = Language::where('language_type', config('settings.language_type.european'))->get();
        $restLanguages = Language::where('language_type', config('settings.language_type.rest'))->get();

        return view('teacher.batch.add', compact(['boards', 'schoolClasses', 'subjects', 'graduationTypes', 'languageTypes', 'underSubjects', 'postSubjects', 'europeanLanguages', 'restLanguages']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $batch = Batch::create([
            'user_id' => Auth::user()->id,
            'vertical_id' => $request->input('vertical'),
            'days' => json_encode($request->input('days')),
            'start_time' => $request->input('from_time'),
            'end_time' => $request->input('to_time'),
            'price' => $request->input('amount')
        ]);

        if($request->vertical = 1) {
            $batch->board_id = $request->input('board');
            $batch->school_class_id = $request->input('school_class');
            $batch->subject_id = $request->input('subject');
        }

        elseif($request->vertical = 2) {
            // $batch->graduation_type = $request->input('graduation_type');
            $batch->college_subject_id = $request->input('post_subject');
            if($request->under_subject) {
                $batch->college_subject_id = $request->input('under_subject');
            }
        }

        elseif($request->vertical = 3) {
            $batch->language_id = $request->input('european_language');
            if($request->rest_language) {
                $batch->language_id = $request->input('rest_language');
            }
        }

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
