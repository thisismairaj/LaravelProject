<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroupOwnersController extends Controller
{
    public function groupByOwnersService(Request $request){
        $arr = json_decode(array(request()->input('data'))[0]);

        $elementCounts = array();
        $duplicates = array();
        dd($request);
    }
}
