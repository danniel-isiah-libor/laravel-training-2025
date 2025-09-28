<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInterestRequest;
use App\Models\Interest;
use Illuminate\Http\Request;

class InterestController extends Controller
{
    public function create()
    {
        $interests = Interest::getInterests();

        return view('pages.interest.create', compact('interests'));
    }

    public function store(StoreInterestRequest $request)
    {

        $validated = $request->validated();

        $interests = Interest::getInterests();
        $interestsArray = (array) $interests;

        $selectedInterests = array_filter($interestsArray, function($interest) use ($validated) {
            return in_array($interest->id, $validated['interests']);
        });

        foreach ($selectedInterests as $interest) {
            // dd($interest);
        }
    }
}
