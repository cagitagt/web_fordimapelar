<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExternalSetting extends Model
{
    //
    protected $fillable = [
        'invitation_url',
        'contact1_name',
        'contact2_name',
        'contact1_link',
        'contact2_link',
        'internal_terms_url',
        'external_terms_url',
        'terms_form_url'
    ];
}
