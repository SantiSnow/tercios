<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SellingValueRequest extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',
        'address',
        'city',
        'estate_id',
    ];

    public function estate()
    {
        return $this->belongsTo(Estate::class);
    }
}
