<?php

namespace App\Http\Controllers;

use App\Models\CollegeSubject;
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
}
