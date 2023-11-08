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
    protected $fillable = [];

    public function employees(){
        return $this->hasMany(Employee::class);
    }

    public function locations(){
        return $this->hasMany(Location::class);
    }

    public function shifts(){
        return $this->hasMany(Shift::class);
    }

    public function attendance(){
        return $this->belongsTo(Attendance::class);
    }

}
