<?php

namespace App\Http\Controllers;

use App\Models\CollegeSubject;
use App\Models\Vertical;
use Illuminate\Http\Request;

class CollegeController extends Controller
{
    public function index()
    {
        $underSubjects = CollegeSubject::where('graduation_type', config('settings.graduation_type.undergraduate'))->get();
        $postSubjects = CollegeSubject::where('graduation_type', config('settings.graduation_type.postgraduate'))->get();
        $graduationTypes = config('settings.graduation_type');

        return view('colleges', compact(['underSubjects', 'postSubjects', 'graduationTypes']));
    }

    public function register()
    {
        $underSubjects = CollegeSubject::where('graduation_type', config('settings.graduation_type.undergraduate'))->get();
        $postSubjects = CollegeSubject::where('graduation_type', config('settings.graduation_type.postgraduate'))->get();
        $vertical = Vertical::where('name', 'College')->first();

        return view('college.index', compact(['underSubjects', 'postSubjects', 'vertical']));
    }
}
