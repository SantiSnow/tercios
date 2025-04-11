<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estate extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
    ];

    public function cities()
    {
        return $this->hasMany(City::class);
    }

    public function selling_value_requests()
    {
        return $this->hasMany(SellingValueRequest::class);
    }
}
