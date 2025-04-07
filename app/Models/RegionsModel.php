<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegionsModel extends Model
{
    protected $table = "regions";
    protected $fillable = ['region_name'];

    public function RegionToCountries(){
        return $this->hasMany(CountriesModel::class, 'region_id');
    }
}
