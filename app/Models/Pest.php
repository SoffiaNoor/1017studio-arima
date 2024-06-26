<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pest extends Model
{
    use HasFactory;

    protected $table = 'pest';

    protected $fillable = [
        'title',
        'header_image',
        'title_eng',
    ];
}
