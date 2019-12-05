<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\College;

class DiplomaController extends Controller
{
    public function index()
    {
        $colleges = College::all();
        return view('insert_form.diploma')->with('colleges',$colleges);
    }
}
