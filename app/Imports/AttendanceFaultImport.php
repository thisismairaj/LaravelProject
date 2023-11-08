<?php

namespace App\Imports;

use App\Models\AttendanceFault;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AttendanceFaultImport implements ToCollection,WithHeadingRow
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) 
        {
            AttendanceFault::create([
                'employee_id'  => $row['employee_id'],
                'attendance_id'  => $row['attendance_id'],
                'type'  => $row['type'],
                'date' => $row['date'],
                'description' => $row['description']
            ]);
        }
    }

}
