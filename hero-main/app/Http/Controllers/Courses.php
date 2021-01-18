<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Courses extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('course');
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $arr = array();
        $arr['course'] =Course::where('slug', $slug)->first();

        if(!$arr['course']) {
            echo "No";exit;
        }

        return view('course', $arr);

    }
}
