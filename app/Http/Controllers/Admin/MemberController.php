<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Str;
use Inertia\Inertia;
use Inertia\Response;

class MemberController extends Controller
{
    /**
     * @return Response
     */
    public function index(): Response
    {
        return Inertia::render('Admin/Members/Index', [
            'members' => Member::orderBy('id', 'desc')->paginate(25),
        ]);
    }


    /**
     * @param Request $request
     * @return Application|Redirector|\Illuminate\Contracts\Foundation\Application|RedirectResponse
     */
    public function store(Request $request): Application|Redirector|\Illuminate\Contracts\Foundation\Application|RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
        ]);

        $image = "default_mujer.png";
        if($request->file('image')){
            $image = Str::random(25).".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('public/images/staff', $image);
        }

        $last = Member::select('place')->orderBy('place', 'desc')->first();

        Member::create([
            'name' => $request->name,
            'image' => "/images/staff/" . $image,
            'position' => $request->position,
            'email' => $request->email,
            'linkedin_url' => $request->linkedin_url,
            'ig_url' => $request->ig_url,
            'meta_url' => $request->meta_url,
            'phone' => $request->phone,
            'place' => $last->place,
        ]);

        return redirect('/members');
    }

    public function edit($id)
    {
        $member = Member::find($id);
        if ($member)
        {
            return Inertia::render('Admin/Members/Edit', [
                'member' => $member
            ]);
        }

        return redirect('/members');
    }


    public function save(Request $request)
    {
        $member = Member::find($request->id);
        if ($member)
        {
            $member->name = $request->name;
            $member->position = $request->position;
            $member->email = $request->email;
            $member->linkedin_url = $request->linkedin_url;
            $member->ig_url = $request->ig_url;
            $member->meta_url = $request->meta_url;
            $member->phone = $request->phone;

            if($request->file('image')){
                $image = Str::random(25).".".$request->file('image')->getClientOriginalExtension();
                $request->file('image')->storeAs('public/images/staff', $image);

                $member->image = "/images/staff/" . $image;
            }

            $member->save();
        }

        return redirect('/members');
    }

    public function delete($id)
    {
        $member = Member::find($id);
        if ($member) $member->delete();
        return redirect('/members');
    }

    /**
     * @return Response
     */
    public function order(): Response
    {
        return Inertia::render('Admin/Members/Order', [
            'members' => Member::orderBy('place')->get(),
        ]);
    }

    public function saveOrder(Request $request)
    {
        for($j = 0; count($request->members_order)>$j; $j++)
        {
            $member = Member::find(str_replace('prop-member-', '', $request->members_order[$j]));
            if($member)
            {
                $member->place = $j+1;
                $member->save();
            }
        }

        return redirect('/members');
    }
}
