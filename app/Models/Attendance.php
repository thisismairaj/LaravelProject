<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;

class Attendance extends Model
{
    use HasFactory;
    protected $fillable = ['employee_id', 'schedule_id','check_in', 'check_out', 'working_hours'];

    protected $dates = ['check_in', 'check_out'];

    public function employees(){
        return $this->hasMany(Employee::class);
    }

    public function schedules(){
        return $this->hasMany(Schedule::class);
    }

    public function attendance(){
        return $this->belongsTo(AttendanceFault::class);
    }

}
