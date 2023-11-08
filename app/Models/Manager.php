<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\People;
use App\Models\Company;

class Manager extends Model
{
    use HasFactory;

    protected $fillable = ['department'];

    public function people(){
        return $this->belongsTo(People::class);
    }

    public function company(){
        return $this->hasMany(Company::class);
    }

}
