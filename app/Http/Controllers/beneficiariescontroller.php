<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class beneficiariescontroller extends Controller
{
    //
    function ben()
{
    return DB::table('beneficiaries')->get();
    
}
}
