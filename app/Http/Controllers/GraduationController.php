<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DsDivision;
use App\College;

class GraduationController extends Controller
{
    public function index()
    {
        $universities = College::where('clg_type','university')->get();
        return view('insert_form.graduate')->with('colleges',$universities);
    }
}
