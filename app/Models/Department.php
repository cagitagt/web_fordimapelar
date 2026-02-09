<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    protected $fillable = [
        'name_dept',
        'image',
        'description'
    ];

    public function departmentProgram()
    {
        return $this->hasMany(DepartmentProgram::class);
    }


}