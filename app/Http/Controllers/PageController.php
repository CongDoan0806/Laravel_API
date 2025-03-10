<?php

namespace App\Http\Controllers;

use App\Models\Slides;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
        $slide = Slides::all();
        return view('page.trangchu', compact('slide'));
    }
}
