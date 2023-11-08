<?php

namespace App\Imports;

use App\Models\Shift;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ShiftImport implements ToCollection,WithHeadingRow
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) 
        {
            Shift::create([
                'shift_name'  => $row['shift_name'],
                'start_time'  => $row['start_time'],
                'end_time'  => $row['end_time'],
                'schedule_id'  => $row['schedule_id'],
            ]);
        }
    }

}
