<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Course;
use App\Models\Area_link_course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Areas extends Controller
{

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $arr = array();
        $arr['area'] =Area::where('slug', $slug)->first();

        if(!$arr['area']) {
            echo "No";exit;
        }

        $course_link = Area_link_course::where('area_id', $arr['area']->id)->get();

        foreach ($course_link as $key => $value) {
            $arr['courses'][$key] = Course::find($value->course_id);
        }

        return view('area', $arr);

    }
}
