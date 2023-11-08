<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;
use App\Models\Shift;
use App\Models\Location;
use App\Models\Attendance;

class Schedule extends Model
{
    use HasFactory;
    protected $fillable = ['employee_id', 'location_id', 'shift_id', 'date', 'start_time', 'end_time'];

}
