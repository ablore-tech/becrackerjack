<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Board;
use App\Models\Lead;
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
        $batches = Batch::where('vertical_id', config('settings.verticals.school'))->where('approval_status', config('settings.approval_status.approved'))->get();

        return view('school.index', compact(['boards', 'schoolClasses', 'subjects', 'vertical', 'batches']));
    }
}
