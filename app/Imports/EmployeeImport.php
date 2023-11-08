<?php

namespace App\Imports;

use App\Models\Employee;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EmployeeImport implements ToCollection,WithHeadingRow
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) 
        {
            Employee::create([
                'schedule_id'  => $row['schedule_id'],
                'attendance_id'  => $row['attendance_id'],
                'people_id'  => $row['people_id'],
                'title'  => $row['title'],
            ]);
        }
    }

}
