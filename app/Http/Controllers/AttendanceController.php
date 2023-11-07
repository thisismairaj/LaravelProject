<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class AttendanceController extends Controller
{
    public function show(){
        return view('what');
    }

    public function uploadEmployee(){
        return "upload employee page";
    }
    
    public function uploadAttendance(Request $request){
        dd($request);
    }

    public function uploadLocation(){
        return 'upload location page';
    }

    public function uploadAttendanceFault(){
        return 'upload attendance fault page';
    }

    public function uploadSchedule(){
        return 'upload schedule page';
    }

    public function uploadShift(){
        return 'upload shift page';
    }

}
