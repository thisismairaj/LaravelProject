<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Manager;
use App\Models\Employee;
use App\Models\Location;
use App\Models\Asset;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['company_name'];

    public function managers(){
        return $this->belongsTo(Manager::class);
    }

    public function employees(){
        return $this->belongsTo(Employee::class);
    }

    public function locations(){
        return $this->belongsTo(Location::class);
    }

    public function assets(){
        return $this->belongsTo(Asset::class);
    }
}
