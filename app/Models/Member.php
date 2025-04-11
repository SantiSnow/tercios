<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'position',
        'email',
        'linkedin_url',
        'ig_url',
        'meta_url',
        'phone',
        'place',
    ];
}
