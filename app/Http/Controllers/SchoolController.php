<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function view()
    {
        $underSubjects = CollegeSubject::where('graduation_type', config('settings.graduation_type.undergraduate'))->get();
        $postSubjects = CollegeSubject::where('graduation_type', config('settings.graduation_type.postgraduate'))->get();
        $vertical = Vertical::where('name', 'College')->first();

        return view('college.index', compact(['underSubjects', 'postSubjects', 'vertical']));
    }
}
