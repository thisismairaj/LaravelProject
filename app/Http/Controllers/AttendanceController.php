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

    public function import(){
        return view('import');
    }

    public function importPost(Request $request){
        dd($request->files);
        Excel::import(new UsersImport, 'users.xlsx');
        
        return redirect('/')->with('success', 'All good!');

    }
}
