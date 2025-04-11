<?php

namespace App\Http\Controllers\Admin;

use App\Models\Amenity;
use App\Models\City;
use App\Models\Estate;
use App\Models\Image;
use App\Models\Property;
use App\Models\PropertyQuestion;
use App\Models\Type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Inertia\Inertia;

class PropertiesController extends Controller
{
    public function index()
    {
        return Inertia::render('Admin/Properties/Properties',[
            'properties' => Property::orderBy('id', 'desc')
                ->with(['images' => function ($query) {
                    $query->orderBy('place');
                }])
                ->with('city')
                ->paginate(25),
        ]);
    }

    public function create()
    {
        return Inertia::render('Admin/Properties/Create',[
            'estates' => Estate::all(),
            'types' => Type::all(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'preview' => 'required|string|max:2000',
            'price' => 'required',
            'currency' => 'required',
            'address' => 'required',
            'operation' => 'required',
            'description' =>  'required',
            'bathrooms' =>  'required',
            'rooms' =>  'required',
            'square_meters' => 'required',
            'outstanding' => 'required',
            'type_id' =>  'required',
            'city_id' =>  'required',
            'estate_id' =>  'required',
        ]);

        $property = Property::create([
            'name' => $request->name,
            'preview' => $request->preview,
            'price' => $request->price,
            'currency' => $request->currency,
            'address' => $request->address,
            'zip_code' => $request->zip_code,
            'operation' => $request->operation,
            'description' => $request->description,
            'bathrooms' => $request->bathrooms,
            'rooms' => $request->rooms,
            'square_meters' => $request->square_meters,
            'times_visited' => 0,
            'outstanding' => $request->outstanding,
            'extra_information' => $request->extra_information,
            'longitude' => $request->longitude,
            'latitude' => $request->latitude,
            'mts_hec' => $request->mts_hec,
            'type_id' => $request->type_id,
            'city_id' => $request->city_id,
            'estate_id' => $request->estate_id,
        ]);

        if($request->amenities)
        {
            foreach ($request->amenities as $amenity)
            {
                $new_amenity = new Amenity();
                $new_amenity->property_id = $property->id;
                $new_amenity->name = $amenity['name'];
                $new_amenity->save();
            }
        }

        if($request->file('images'))
        {
            foreach ($request->file('images') as $image)
            {
                $image_name = Str::random(25) . "." . $image->getClientOriginalExtension();
                $image->storeAs('public/properties', $image_name);

                $new_image = new Image();
                $new_image->file = $image_name;
                $new_image->property_id = $property->id;
                $new_image->save();
            }
        }

        return redirect('/properties');
    }

    public function edit($id)
    {
        $property = Property::where('id', $id)
            ->with('estate')
            ->with('city')
            ->firstOrFail();

        return Inertia::render('Admin/Properties/Edit',[
            'property' => $property,
            'estates' => Estate::all(),
            'cities' => City::where('estate_id', $property->estate_id)->get(),
            'amenities' => Amenity::where('property_id', $property->id)->get(),
            'images' => Image::where('property_id', $property->id)->orderBy('place')->get(),
            'types' => Type::all(),
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Foundation\Application|\Illuminate\Routing\Redirector|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
     */
    public function save(Request $request): \Illuminate\Foundation\Application|\Illuminate\Routing\Redirector|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'preview' => 'required|string|max:2000',
            'price' => 'required',
            'currency' => 'required',
            'address' => 'required',
            'operation' => 'required',
            'type_id' =>  'required',
            'city_id' =>  'required',
            'estate_id' =>  'required',
        ]);

        $property = Property::find($request->id);

        $property->name = $request->name;
        $property->preview = $request->preview;
        $property->price = $request->price;
        $property->currency = $request->currency;
        $property->address = $request->address;
        $property->zip_code = $request->zip_code;
        $property->operation = $request->operation;
        $property->description = $request->description;
        $property->bathrooms = $request->bathrooms;
        $property->rooms = $request->rooms;
        $property->square_meters = $request->square_meters;
        $property->outstanding = $request->outstanding;
        $property->extra_information = $request->extra_information;
        $property->longitude = $request->longitude;
        $property->latitude = $request->latitude;
        $property->mts_hec = $request->mts_hec;
        $property->type_id = $request->type_id;
        $property->city_id = $request->city_id;
        $property->estate_id = $request->estate_id;

        $property->save();

        $old_amenities = Amenity::where('property_id', $property->id)->get();
        if($old_amenities)
        {
            foreach ($old_amenities as $old_amenity)
            {
                $old_amenity->delete();
            }
        }

        if ($request->amenities)
        {
            foreach ($request->amenities as $amenity)
            {
                $new_amenity = new Amenity();
                $new_amenity->property_id = $property->id;
                $new_amenity->name = $amenity['name'];
                $new_amenity->save();
            }
        }

        if($request->images_order)
        {
            for($j = 0; count($request->images_order)>$j; $j++)
            {
                $image = Image::find($request->images_order[$j]);
                if($image)
                {
                    $image->place = $j+1;
                    $image->save();
                }
            }
        }

        if ($request->file('images'))
        {
            foreach ($request->file('images') as $image)
            {
                $image_name = Str::random(25) . "." . $image->getClientOriginalExtension();
                $image->storeAs('public/properties', $image_name);

                $new_image = new Image();
                $new_image->file = $image_name;
                $new_image->property_id = $property->id;
                $new_image->save();

                $last_image = Image::where('property_id', $property->id)->max('place', 'desc');
                $new_image->place = $last_image+1;
                $new_image->save();
            }
        }

        return redirect('/properties');
    }

    public function delete($id)
    {
        $property = Property::find($id);
        $property->delete();

        return redirect('/properties');
    }

    public function properties_questions()
    {
        return Inertia::render('Admin/Questions/Index',[
            'contacts' => PropertyQuestion::orderBy('id', 'desc')
                ->with('property')
                ->paginate(20),
        ]);
    }

    public function outstandingProperties()
    {
        return Inertia::render('Admin/Properties/Outstanding',[
            'first_property' => Property::where('outstanding', true)
                ->orderBy('id', 'desc')
                ->with('images')
                ->take(1)
                ->get(),

            'second_property' => Property::where('outstanding', true)
                ->orderBy('id', 'desc')
                ->with('images')
                ->skip(1)
                ->take(1)
                ->get(),

            'properties' => Property::orderBy('id', 'desc')
                ->get(),
        ]);
    }

    public function changeOutstandingProps(Request $request)
    {
        $property_id_one = $request->property_id_one;
        $property_id_two = $request->property_id_two;

        $properties = Property::all();

        foreach ($properties as $prop)
        {
            $prop->outstanding = false;
            $prop->save();
        }

        $prop_one = Property::find($property_id_one);
        $prop_one->outstanding = true;
        $prop_one->save();

        $prop_two = Property::find($property_id_two);
        $prop_two->outstanding = true;
        $prop_two->save();

        return redirect('properties-outstanding');
    }
}
