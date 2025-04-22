<?php

namespace App\Http\Controllers\WebSite;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Estate;
use App\Models\Member;
use App\Models\Post;
use App\Models\Property;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class HomeController extends Controller
{
    /**
     * @return Response
     */
    public function index(): Response
    {
        return Inertia::render('Welcome', [
            'posts' => Post::orderBy('id', 'desc')
                ->get(),
        ]);
    }

    public function sell()
    {
        return Inertia::render('Sell', [
            'estates' => Estate::all(),
        ]);
    }

    public function contact()
    {
        return Inertia::render('Contact', []);
    }

    public function contactThankyou()
    {
        return Inertia::render('ContactThanks', []);
    }

    public function contable()
    {
        return Inertia::render('Servicios/Contable', []);
    }

    public function juridico()
    {
        return Inertia::render('Servicios/Juridico', []);
    }

    public function inmobiliario()
    {
        return Inertia::render('Servicios/Inmobiliario', []);
    }

    public function desarrollos()
    {
        return Inertia::render('Servicios/Desarrollos', []);
    }

    public function tuRed()
    {
        return Inertia::render('TuRed', []);
    }

    public function staff()
    {
        return Inertia::render('Staff', [
            'members' => Member::orderBy('place')->get(),
        ]);
    }
}
