<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\City;

class Cities extends Controller
{
    public function save(){
        return response()->json(City::all(), 200);
    }
}
