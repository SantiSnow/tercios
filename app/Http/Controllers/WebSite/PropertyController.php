<?php

namespace App\Http\Controllers\WebSite;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Image;
use App\Models\Property;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PropertyController extends Controller
{
    /**
     * @param $id
     * @return \Inertia\Response
     */
    public function getProperty($id): \Inertia\Response
    {
        $property = Property::where('id', $id)
            ->with('city')
            ->with('estate')
            ->with('type')
            ->with('amenities')
            ->firstOrFail();

        return Inertia::render('Property', [
            'property' => $property,
            'images' => Image::where('property_id', $property->id)->orderBy('place')->get(),
        ]);
    }

    public function renting()
    {

        return Inertia::render('Propiedades/Renting', [
            'properties' => Property::where('operation', 'En Alquiler')
                ->with(['images' => function ($query) {
                    $query->orderBy('place');
                }])
                ->with('estate')
                ->with('city')
                ->with('type')
                ->orderBy('outstanding', 'desc')
                ->orderBy('id', 'desc')
                ->paginate(9),
            'cities' => City::with('property')->has('property')->get()->pluck('name'),
        ]);
    }

    public function selling()
    {
        return Inertia::render('Propiedades/Selling', [
            'properties' => Property::where('operation', 'En Venta')
                ->with(['images' => function ($query) {
                    $query->orderBy('place');
                }])
                ->with('estate')
                ->with('city')
                ->with('type')
                ->orderBy('outstanding', 'desc')
                ->orderBy('id', 'desc')
                ->paginate(9),
            'cities' => City::with('property')->has('property')->get()->pluck('name'),
        ]);
    }
}
