<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function show(){
        return view('what');
    }

    public function uploadEmployee(){
        return "upload employee page";
    }
    
    public function uploadAttendance(){
        return 'upload attendance page';
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
