<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Amenity;
use App\Models\Image;
use App\Models\Mailer;
use App\Models\Property;
use App\Models\PropertyQuestion;
use App\Services\TokkoService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PropertyController extends Controller
{
    protected TokkoService $tokkoService;

    public function __construct(TokkoService $tokkoService)
    {
        $this->tokkoService = $tokkoService;
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'message' => 'required',
            'property_id' => 'required',
        ]);

        if ($validator->fails())
        {
            return response([
                'message' => 'validation errors',
                'errors' => $validator->errors(),
            ]);
        }

        PropertyQuestion::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
            'property_id' => $request->property_id,
        ]);


        $prop = Property::find($request->property_id);
        if ($prop)
        {
            $mailer = new Mailer();
            $mailer->sendCommentOnPropertyEmail(
                $request->name,
                $request->email,
                $request->phone,
                $request->message,
                $prop->name,
                $prop->id,
            );

            $this->tokkoService->sendContactToCRM(
                $request->name,
                $request->email,
                $request->phone,
                $request->message . ". - Consulta por propiedad: " . $prop->name,
                ['Web', 'Consulta por propiedad'],
            );

            return response([
                'message' => 'message sent',
            ]);
        }

        return response([
            'message' => 'message sent',
        ]);
    }

    public function deletePicture(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image_id' => 'required',
            'token' => 'required',
        ]);

        if ($validator->fails())
        {
            return response([
                'message' => 'validation errors',
                'errors' => $validator->errors(),
            ]);
        }

        if ($request->token != "n1cfd03d1fdmc31das")
        {
            return response([
                'message' => 'invalid token',
            ]);
        }

        $image = Image::find($request->image_id);
        $image->delete();

        return response([
            'message' => "image deleted",
        ]);
    }

    public function deleteAmenity(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'amenity_id' => 'required',
            'token' => 'required',
        ]);

        if ($validator->fails())
        {
            return response([
                'message' => 'validation errors',
                'errors' => $validator->errors(),
            ]);
        }

        if ($request->token != "n1cfd03d1fdmc31das")
        {
            return response([
                'message' => 'invalid token',
            ]);
        }

        $amenity = Amenity::find($request->amenity_id);
        $amenity->delete();

        return response([
            'message' => "amenity deleted",
        ]);
    }

    public function getAll()
    {
        return response([
            'properties' => Property::orderBy('id', 'desc')
                ->with('city')
                ->get(),
        ]);
    }
}
