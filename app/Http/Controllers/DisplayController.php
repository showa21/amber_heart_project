<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;
use App\Models\Course;

class DisplayController extends Controller
{
    public function index() {

        $courses = Course::all();

    //    dd($courses);

        return view('apply',[
            'courses' =>$courses
        ]);
    }
}
