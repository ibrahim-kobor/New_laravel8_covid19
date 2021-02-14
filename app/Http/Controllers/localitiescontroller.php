<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class localitiescontroller extends Controller
{
    //
    function locality()
    {
        return DB::table('localities')->get();
    }
}
