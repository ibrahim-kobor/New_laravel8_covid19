<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class gendercontroller extends Controller
{
    //
    function gender()
    {
        return DB::table('gender')->get();
    }
}
