<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutCabinet extends Model
{
    //
    protected $fillable = [
        'cabinet_name',
        'cabinet_year',
        'cabinet_ebook',
        'cabinet_visual',
        'company_profile_link',
        'cabinet_narrative',
        'chairman_name',
        'chairman_photo',
        'chairman_narrative',
        'cabinet_vision',
        'cabinet_mission',
        'cabinet_structure_img'
    ];
}
