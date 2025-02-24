<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index(){
        $items = [
            ['id' => 1, 'name' => 'Doan dep try 1', 'height' => 170],
            ['id' => 2, 'name' => 'Doan dep try 2', 'height' =>180],
            ['id' => 3, 'name' => 'Doan dep try 3', 'height' => 190]
        ];
        return response()->json($items);                                
    }
}
