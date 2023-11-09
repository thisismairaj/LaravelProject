<?php


namespace App\Http\Controllers;

use Inertia\Inertia;

use Illuminate\Http\Request;

use App\Models\Attendance;
use App\Models\Employee;

use App\Imports\AttendanceImport;
use App\Imports\EmployeeImport;
use App\Imports\LocationImport;
use App\Imports\ScheduleImport;
use App\Imports\ShiftImport;
use App\Imports\AttendanceFaultImport;

use Maatwebsite\Excel\Facades\Excel;

class AttendanceController extends Controller
{

    public function uploadEmployee(Request $request){
        // dd($request);
        $file = $request->file('file');
        Excel::import(new EmployeeImport, $file);
    }
    
    public function uploadAttendance(Request $request){
        // dd($request);
        $file = $request->file('file');
        Excel::import(new AttendanceImport, $file);
    }

    public function uploadLocation(Request $request){
        // dd($request);
        $file = $request->file('file');
        Excel::import(new LocationImport, $file);
    }

    public function uploadAttendanceFault(Request $request){
        // dd($request);
        $file = $request->file('file');
        Excel::import(new AttendanceFaultImport, $file);
    }

    public function uploadSchedule(Request $request){
        // dd($request);
        $file = $request->file('file');
        Excel::import(new ScheduleImport, $file);
    }

    public function uploadShift(Request $request){
        // dd($request);
        $file = $request->file('file');
        Excel::import(new ShiftImport, $file);
    }

    public function getAttendance($id){
        $attendances = Attendance::where('employee_id', $id)->get();
        $employee = Employee::find($id);
        $people = $employee->people;
        $totalWorkingHours = $attendances->sum('working_hours');

        return Inertia::render('Show',[
            'employee' => $employee,
            'totalWorkingHours' => $totalWorkingHours,
            'attendances' => $attendances,
            'people' => $people,
            'name' => "Mairaj Pirzada"
        ]);

    }
}
