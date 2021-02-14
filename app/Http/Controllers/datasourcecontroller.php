<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class datasourcecontroller extends Controller
{
    //
    function source()
    {
        return DB::table('data source')->get();
    }
}
