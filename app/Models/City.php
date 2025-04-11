<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'estate_id',
    ];

    public function estate()
    {
        return $this->belongsTo(Estate::class);
    }

    public function property()
    {
        return $this->hasMany(Property::class);
    }
}
