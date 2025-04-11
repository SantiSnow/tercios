<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Property extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'id',
        'name',
        'price',
        'currency',
        'address',
        'zip_code',
        'operation',
        'description',
        'preview',
        'bathrooms',
        'rooms',
        'square_meters',
        'times_visited',
        'outstanding',
        'extra_information',
        'longitude',
        'latitude',
        'mts_hec',
        'type_id',
        'city_id',
        'estate_id',
        'tokko_id',
    ];

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function amenities()
    {
        return $this->hasMany(Amenity::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function property_questions()
    {
        return $this->hasMany(PropertyQuestion::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function estate()
    {
        return $this->belongsTo(Estate::class);
    }
}
