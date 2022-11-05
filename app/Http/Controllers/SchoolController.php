<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\SchoolClass;
use App\Models\Subject;
use App\Models\Vertical;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function view()
    {
        $boards = Board::all();
        $schoolClasses = SchoolClass::all();
        $subjects = Subject::all();
        $vertical = Vertical::where('name', 'School')->first();

        return view('school.index', compact(['boards', 'schoolClasses', 'subjects', 'vertical']));
    }
}
