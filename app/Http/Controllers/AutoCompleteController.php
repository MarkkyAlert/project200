<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AutoCompleteController extends Controller
{


    function show(Request $request)  {

        if($request->get('query')){

        $query = $request->get('query');

        $data = DB::table('province')->where('PROVINCE_NAME', 'LIKE', "{$query}%")->get();

        $output2 = '<ul class="dropdown-menu" style="display:block; position:relative">';

        foreach($data as $row){

        $output2 .= '<li>'.$row->PROVINCE_NAME.'</li>';

        }

        $output2 .= '</ul>';

        

        }
    }

    function showDistrict(Request $request)  {

        if($request->get('query2')){

        $query2 = $request->get('query2');

        $data2 = DB::table('district')->where('DISTRICT_NAME', 'LIKE', "{$query2}%")->get();

        $output = '<ul class="dropdown-menu" style="display:block; position:relative">';

        foreach($data2 as $row){

        $output .= '<li>'.$row->DISTRICT_NAME.'</li>';

        }

        $output .= '</ul>';

        echo $output;

        }
    }
}
