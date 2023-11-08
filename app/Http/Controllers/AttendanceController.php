<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Imports\AttendanceImport;
use Maatwebsite\Excel\Facades\Excel;

class AttendanceController extends Controller
{

    public function uploadEmployee(){
        // dd($request);
        $file = $request->file('file');
        Excel::import(new EmployeeImport, $file);
    }
    
    public function uploadAttendance(Request $request){
        // dd($request);
        $file = $request->file('file');
        Excel::import(new AttendanceImport, $file);
    }

    public function uploadLocation(){
        // dd($request);
        $file = $request->file('file');
        Excel::import(new LocationImport, $file);
    }

    public function uploadAttendanceFault(){
        // dd($request);
        $file = $request->file('file');
        Excel::import(new AttendanceFaultImport, $file);
    }

    public function uploadSchedule(){
        // dd($request);
        $file = $request->file('file');
        Excel::import(new ScheduleImport, $file);
    }

    public function uploadShift(){
        // dd($request);
        $file = $request->file('file');
        Excel::import(new ShiftImport, $file);
    }

}
