<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DuplicateController extends Controller
{
    public function findDuplicates(){
        $arr = json_decode(array(request()->input('data'))[0]);

        $elementCounts = array();
        $duplicates = array();

        foreach ($arr as $element) {
            if (isset($elementCounts[$element])) {
                $elementCounts[$element]++;
                if ($elementCounts[$element] === 2) {
                    $duplicates[] = $element;
                }
            } else {
                $elementCounts[$element] = 1;
            }
        }

        return $duplicates;
    }
}
