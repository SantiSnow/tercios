<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class NewsletterSubscriber extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
    ];

    public static function storeInCRM($name, $email)
    {
        try{
            $tags = ["Web", "Newsletter"];

            $response = Http::post('http://www.tokkobroker.com/api/v1/webcontact/?lang=es_ar&format=json&key='.env('TOKKO_BROKERS_API_KEY'), [
                "name"=> $name,
                "email"=> $email,
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
