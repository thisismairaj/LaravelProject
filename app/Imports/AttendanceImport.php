<?php

namespace App\Imports;

use App\Models\Attendance;
use Maatwebsite\Excel\Concerns\ToModel;

class AttendanceImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Attendance([
           'employee_id'     => $row[0],
           'date'    => $row[1], 
           'is_present' => $row[2],
           'check_in' => $row[3],
           'check_out' => $row[4],
           'working_hours' => $row[5],
        ]);
    }
}
