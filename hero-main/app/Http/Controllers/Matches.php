<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Matches extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr = array();
        $arr['heroes'] = Hero::all();

        return view('match', $arr);
    }
}
