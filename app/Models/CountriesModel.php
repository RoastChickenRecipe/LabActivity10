<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CountriesModel extends Model
{
    protected $table = 'countries';
    protected $fillable = ['country_name', 'region_id'];

    public function CountriesToRegion(){
        return $this->belongsTo(RegionsModel::class, 'region_id');
    }

    public function CountriesToLocation(){
        return $this->hasMany(LocationsModel::class, 'country_id');
    }
}
