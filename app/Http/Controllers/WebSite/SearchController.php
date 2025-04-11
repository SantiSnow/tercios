<?php

namespace App\Http\Controllers\WebSite;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Property;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $city_name = $request->city;
        $properties = Property::where('operation', $request->operation)
            ->where('type_id', $request->type)
            ->whereHas('city', function ($query) use ($city_name) {
                return $query->where('name', 'like', '%'.$city_name.'%');
            })
            ->with('images')
            ->with('city')
            ->with('type')
            ->orderBy('id', 'desc')
            ->paginate(9);


        if($request->min && $request->max)
        {
            $properties = Property::where('address', 'like', '%'.$city_name.'%')
                ->where('operation', $request->operation)
                ->where('type_id', $request->type)
                ->where('price', '>', $request->min)
                ->where('price', '<', $request->max)
                ->with('images')
                ->with('city')
                ->with('type')
                ->orderBy('id', 'desc')
                ->paginate(9);
        }
        elseif ($request->min)
        {
            $properties = Property::where('address', 'like', '%'.$city_name.'%')
                ->where('operation', $request->operation)
                ->where('type_id', $request->type)
                ->where('price', '>', $request->min)
                ->with('images')
                ->with('city')
                ->with('type')
                ->orderBy('id', 'desc')
                ->paginate(9);
        }
        elseif ($request->max) {
            $properties = Property::where('address', 'like', '%' . $city_name . '%')
                ->where('operation', $request->operation)
                ->where('type_id', $request->type)
                ->where('price', '<', $request->max)
                ->with('images')
                ->with('city')
                ->with('type')
                ->orderBy('id', 'desc')
                ->paginate(9);
        }

        return Inertia::render('Propiedades/SearchResults', [
            'properties' => $properties,
            'cities' => City::with('property')->has('property')->get()->pluck('name'),
            'operation' => $request->operation
        ]);
    }
}
