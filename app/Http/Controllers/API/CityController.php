<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function cities($id)
    {
        return City::where('estate_id', $id)->get();
    }

    public function getZones()
    {
        return [
            "cities" => City::with('property')->has('property')->get()->pluck('name'),
        ];
    }
}
