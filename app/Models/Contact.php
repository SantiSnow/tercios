<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',
        'address',
        'estate',
        'city',
    ];

    public static function storeInCRM($name, $email, $phone, $message, $origin)
    {
        try{
            $tags = ["Web", $origin];

            $response = Http::post('http://www.tokkobroker.com/api/v1/webcontact/?lang=es_ar&format=json&key='.env('TOKKO_BROKERS_API_KEY'), [
                "name"=> $name,
                "email"=> $email,
                "cellphone"=> $phone,
                "text"=> $message,
                "tags"=> $tags,
            ]);

            info($response);
        }
        catch (\Exception $e)
        {
            info($e->getMessage());
        }
    }
}
