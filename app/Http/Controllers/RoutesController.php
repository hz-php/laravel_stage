<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutesController extends Controller
{
    public function index(Request $request)
    {
        $forms_inp = 'Hello world';
        $url = $request->url();
        $rout = \Request::route()->getName();
        return view('routes', compact('forms_inp', 'url', 'rout'));
    }
}
