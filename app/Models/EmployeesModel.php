<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeesModel extends Model
{
    protected $table = 'employees';
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'hire_date',
        'job_id',
        'salary',
        'manager_id',
        'department_id'
    ];

    public function EmployeeToDepartment(){
        return $this->belongsTo(DepartmentsModel::class, 'department_id');
    }

    public function EmployeeToJob(){
        return $this->belongsTo(JobsModel::class, 'job_id');
    }

    public function EmployeeToDependent(){
        return $this->hasMany(DependentsModel::class, 'employee_id');
    }
}
