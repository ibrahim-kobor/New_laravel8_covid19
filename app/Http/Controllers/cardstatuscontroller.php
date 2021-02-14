<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class cardstatuscontroller extends Controller
{
    //
    function status()
    {
        return DB::table('card status')->get();
    }
}
