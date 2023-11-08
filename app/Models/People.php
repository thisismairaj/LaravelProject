<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;
use App\Models\Manager;

class People extends Model
{
    use HasFactory;
    protected $fillable = [];

    public function employees(){
        return $this->hasMany(Employee::class);
    }
    
    public function managers(){
        return $this->hasMany(Manager::class);
    }
}
