<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Schedule;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'employee_id'];

    public function schedules() {
        return $this->hasMany(Schedule::class);
    }

}
