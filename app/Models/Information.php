<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;
    protected $table = 'information';

    protected $fillable = [
        'logo_header',
        'logo_favicon',
        'logo_company',
        'name',
        'image',
        'slogan',
        'description',
        'description_eng',
        'address',
        'email',
        'phone',
        'google_map',
        'website_link',
    ];
}
