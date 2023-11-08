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
                'employee_id'  => $row['employee_id'],
                'schedule_id'  => $row['schedule_id'],
                'is_present'  => $row['is_present'],
                'date' => $row['date'],
                'check_in' => date('Y-m-d H:i:s', strtotime($row['check_in'])),
                'check_out' => date('Y-m-d H:i:s', strtotime($row['check_out'])),
                'working_hours' => $row['working_hours'],
                'created_at' => date('Y-m-d H:i:s', strtotime($row['created_at'])),
                'updated_at' => date('Y-m-d H:i:s', strtotime($row['updated_at'])),
            ]);
        }
    }

}
