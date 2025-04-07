<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LocationsModel extends Model
{
    protected $table = 'locations';
    protected $fillable = [
        'street_address', 
        'postal_code',
        'city',
        'state_province',
        'country_id'
    ];

    public function LocationToCountrie(){
        return $this->belongsTo(CountriesModel::class, 'country_id');
    }

    public function LocationToDepartment(){
        return $this->hasMany(DepartmentsModel::class, 'location_id');
    }
}
