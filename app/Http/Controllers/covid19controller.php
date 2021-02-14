<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class covid19controller extends Controller
{
    //
    function covid()
    {
        return DB::table('beneficiaries')
        ->join('Cards', 'Cards.Nid', '=', 'beneficiaries.NID')
        ->join('States', 'states.state_id', '=', 'beneficiaries.state_id')
        ->join('gender', 'gender.gender_id', '=', 'beneficiaries.gender_id')
        ->join('localities', 'localities.locality_id', '=', 'beneficiaries.locality_id')
        ->get(array(
            'name',
            'beneficiaries.NID',
            'PAN',
            'State_name',
            'locality_name',
            'activation_date',
            'gender_name'
        ));
    }

}
