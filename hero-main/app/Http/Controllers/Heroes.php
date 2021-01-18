<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\Hero_link_area;
use App\Models\Area;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Heroes extends Controller
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
        $arr['hero'] =Hero::where('slug', $slug)->first();

        if(!$arr['hero']) {
            echo "No";exit;
        }

        $area_link = Hero_link_area::where('hero_id', $arr['hero']->id)->get();

        foreach ($area_link as $key => $value) {
            $arr['areas'][$key] = Area::find($value->area_id);
        }

        return view('hero', $arr);

    }
}
