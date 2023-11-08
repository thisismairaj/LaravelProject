<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Schedule;
use App\Models\People;
use App\Models\company;
use App\Models\AttendanceFault;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['title'];

    public function schedules() {
        return $this->belongsTo(Schedule::class);
    }

    public function people(){
        return $this->belongsTo(People::class);
    }

    public function company(){
        return $this->hasMany(Company::class);
    }

    public function attendanceFault() {
        return $this->belongsTo(AttendanceFault::class);
    }

}
