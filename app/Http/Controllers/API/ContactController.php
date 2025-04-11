<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Mailer;
use App\Models\NewsletterSubscriber;
use App\Models\SellingValueRequest;
use App\Services\TokkoService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;

class ContactController extends Controller
{
    protected TokkoService $tokkoService;

    public function __construct(TokkoService $tokkoService)
    {
        $this->tokkoService = $tokkoService;
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|max:1000',
        ]);

        if ($validator->fails())
        {
            return response([
                'message' => 'Validator error',
                'errors' => $validator->errors(),
            ]);
        }

        $contact = Contact::create([
            'name' => $request->first_name . " " . $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        $mailer = new Mailer();
        $mailResult = $mailer->sendContactForm(
            $request->first_name . " " . $request->last_name,
            $request->email,
            $request->phone,
            $request->message,
            $request->origin,
        );

        $this->tokkoService->sendContactToCRM(
            $request->first_name . " " . $request->last_name,
            $request->email,
            $request->phone,
            $request->message,
            ['Web', 'Contacto'],
        );

        return response([
            'database: ' => $contact,
            'email: ' => $mailResult,
        ], 201);
    }


    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function staff(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|max:1000',
        ]);

        if ($validator->fails())
        {
            return response()->json([
                'message' => 'Validator error',
                'errors' => $validator->errors(),
            ]);
        }

        $contact = Contact::create([
            'name' => $request->first_name . " " . $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        $mailer = new Mailer();
        $mailResult = $mailer->sendWorkWithUsForm(
            $request->first_name . " " . $request->last_name,
            $request->email,
            $request->phone,
            $request->message,
            "Sumate a nuestro equipo",
        );

        $this->tokkoService->sendContactToCRM(
            $request->first_name . " " . $request->last_name,
            $request->email,
            $request->phone,
            $request->message,
            ['Web', 'Sumate a nuestro equipo'],
        );

        return response()->json([
            'database: ' => $contact,
            'email: ' => $mailResult,
        ], 201);
    }

    public function save_sell_request(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|max:1000',
        ]);

        $contact = SellingValueRequest::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
            'address' => $request->address,
            'city' => $request->city,
            'estate_id' => $request->estate,
        ]);

        $mailer = new Mailer();
        $mailResult = $mailer->sendRequestSellForm(
            $request->name,
            $request->email,
            $request->phone,
            $request->message,
            $request->address,
            $request->city,
            $request->estate,
        );

        try{
            $this->tokkoService->sendContactToCRM(
                $request->name,
                $request->email,
                $request->phone,
                $request->message,
                ['Web', 'Tasa tu propiedad'],
                $request->address,
                $request->city,
            );
        }
        catch (\Exception $e)
        {
            info($e->getMessage());
        }

        return Inertia::render('SellThanks', []);
    }

    public function sellThankyou()
    {
        return Inertia::render('SellThanks', []);
    }

    public function newsletter(Request $request)
    {
        if(NewsletterSubscriber::where('email', $request->email)->first())
        {
            return response([
                'message' => 'ok'
            ]);
        }

        NewsletterSubscriber::create([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        NewsletterSubscriber::storeInCRM($request->name, $request->email);

        return response([
            'message' => 'ok'
        ]);
    }
}
