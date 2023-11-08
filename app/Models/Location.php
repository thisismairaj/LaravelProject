<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;
use App\Models\Location;

class Location extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'address', 'city', 'state', 'postal_code'];

    public function company(){
        return $this->hasMany(Company::class);
    }

    public function location() {
        return $this->belongsTo(Location::class);
    }
}
