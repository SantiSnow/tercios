<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SellingValueRequest;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ValuationController extends Controller
{
    public function index(Request $request)
    {
        return Inertia::render('Admin/Sell/SellingRequests', [
            'tasations' => SellingValueRequest::orderBy('id', 'desc')
                ->with('estate')
                ->paginate(20)
        ]);
    }

    public function delete($id)
    {
        $selling_request = SellingValueRequest::find($id);
        $selling_request->delete();
        return redirect('/tasations');
    }
}
