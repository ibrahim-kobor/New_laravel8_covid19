<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class statescontroller extends Controller
{
    //
    function state()
    {
        return DB::table('states')->get();
    }
}
