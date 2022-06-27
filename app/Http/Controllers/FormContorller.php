<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class FormContorller extends Controller
{
    public function index(Request $request)
    {
        $forms_inp = $request->input('names') . " " . $request->input('email');
        return view('form', compact('forms_inp'));
    }
}
