<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Вывести данные введённые в форму
     *
     * @param  string Name
     * @return \Illuminate\View\View
     */

    public function show($request)
    {
        $name = $request['name'];
        return $name;
    }
}
