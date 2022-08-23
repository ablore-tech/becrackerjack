<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\SchoolClass;
use App\Models\Subject;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $boards = Board::all();
        $schoolClasses = SchoolClass::all();
        $subjects = Subject::all();
        return view('home', compact(['boards', 'schoolClasses', 'subjects']));
    }
}
