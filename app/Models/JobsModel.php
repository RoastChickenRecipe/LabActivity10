<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobsModel extends Model
{
    protected $table = 'jobs';
    protected $fillable = [
        'job_title',
        'min_salary',
        'max_salary'
    ];

    public function JobToEmployee(){
        return $this->hasMany(EmployeesModel::class, 'job_id');
    }
}
