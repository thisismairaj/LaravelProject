<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;
use App\Models\Location;

class Location extends Model
{
    use HasFactory;
    protected $fillable = ['schedule_id','address', 'city', 'state','country', 'postal_code'];

    public function company(){
        return $this->hasMany(Company::class);
    }

    public function location() {
        return $this->belongsTo(Location::class);
    }
}
