<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DepartmentsModel extends Model
{
    protected $table = 'departments';
    protected $fillable = [
        'department_name', 
        'location_id'
    ];

    public function DepartmentToLocation(){
        return $this->belongsTo(LocationsModel::class, 'location_id');
    }

    public function DepartmentToEmployee(){
        return $this->hasMany(EmployeesModel::class, 'department_id');
    }
}
