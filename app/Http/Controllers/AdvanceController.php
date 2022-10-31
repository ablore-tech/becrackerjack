<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;

class AdvanceController extends Controller
{
    public function index()
    {
        $europeanLanguages = Language::where('language_type', config('settings.language_type.european'))->get();
        $restLanguages = Language::where('language_type', config('settings.language_type.rest'))->get();
        $languageTypes = config('settings.language_type');

        return view('advance', compact(['europeanLanguages', 'restLanguages', 'languageTypes']));
    }
}
