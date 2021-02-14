<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class cardscontroller extends Controller
{
    //
    function car()
    {
        return DB::table('cards')->get();
    }
}
