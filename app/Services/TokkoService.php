<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class TokkoService
{
    protected string $api_key;

    public function __construct()
    {
        $this->api_key = env('TOKKO_BROKERS_API_KEY');
    }

    /**
     * @param string $name
     * @param string $email
     * @param string $phone
     * @param string $message
     * @param string $address
     * @param string $city
     * @param array $tags
     * @return bool
     */
    public function sendContactToCRM(string $name, string $email, string $phone, string $message, array $tags, string $address = "", string $city = ""): bool
    {
        $body = [
            "name"=> $name,
            "email"=> $email,
            "cellphone"=> $phone,
            "text"=> $message.". Dirección: ".$address.", ".$city.".",
            "tags"=> $tags,
        ];

        $response = Http::post('http://www.tokkobroker.com/api/v1/webcontact/?lang=es_ar&format=json&key='.env('TOKKO_BROKERS_API_KEY'), $body);
        info($response);

        return true;
    }
}
