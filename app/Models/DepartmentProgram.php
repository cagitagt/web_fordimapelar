<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DepartmentProgram extends Model
{
    //
    protected $fillable = [
        'department_id',
        'name_program',
        'image',
        'description',
        'time_label'
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
