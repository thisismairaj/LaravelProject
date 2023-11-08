<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;
use App\Models\Attendance;

class AttendanceFault extends Model
{
    use HasFactory;
 
    protected $fillable = ['type', 'date', 'description'];

    public function employees(){
        return $this->hasMany(Employee::class);
    }

    public function attendances(){
        return $this->hasMany(Attendance::class);
    }

}
