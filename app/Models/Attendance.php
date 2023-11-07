<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;

class Attendance extends Model
{
    use HasFactory;
    protected $fillable = ['employee_id', 'date', 'is_present', 'check_in', 'check_out', 'working_hours'];

    protected $dates = ['check_in', 'check_out'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function totalWorkingHours()
    {
        if ($this->check_in && $this->check_out) {
            return $this->check_in->diffInHours($this->check_out);
        }

        return null;
    }

    public function setCheckInAttribute($value)
    {
        $this->attributes['check_in'] = $value;
        $this->attributes['working_hours'] = $this->totalWorkingHours();
    }

    public function setCheckOutAttribute($value)
    {
        $this->attributes['check_out'] = $value;
        $this->attributes['working_hours'] = $this->totalWorkingHours();
    }

}
