<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInterestsRequest;
use App\Models\Interest;

class InterestController extends Controller
{
    public function welcome()
    {
        $interests = Interest::listAll();
        return view('user.welcome', ['interests' => $interests]);
    }
    public function saveInterests(StoreInterestsRequest $request)
    {
        $validated = $request->validated();
        return redirect()->route('dashboard');
    }
}
