<?php

namespace App\Imports;

use App\Models\Location;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class LocationImport implements ToCollection,WithHeadingRow
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) 
        {
            Location::create([
                'id'  => $row['id'],
                'address' => $row['address'],
                'city' => $row['city'],
                'postal_code' => $row['postal_code'],
                'state' => $row['state'],
                'country' => $row['country'],
                'schedule_id' => $row['schedule_id']
            ]);
        }
    }

}
