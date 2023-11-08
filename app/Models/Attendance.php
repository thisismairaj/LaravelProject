<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;

class Attendance extends Model
{
    use HasFactory;
    protected $fillable = ['employee_id', 'date', 'is_present', 'check_in', 'check_out', 'working_hours', 'schedule_id'];

    protected $dates = ['check_in', 'check_out'];

    public function employees(){
        return $this->hasMany(Employee::class);
    }

    public function schedules(){
        return $this->hasMany(Schedule::class);
    }

}
