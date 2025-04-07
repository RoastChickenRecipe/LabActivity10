<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DependentsModel extends Model
{
    protected $table = 'dependents';
    protected $fillable = [
        'first_name', 
        'last_name',
        'relationship',
        'employee_id'
    ];

    public function DependentToEmployee(){
        return $this->belongsTo(EmployeesModel::class, 'employee_id');
    }
}
