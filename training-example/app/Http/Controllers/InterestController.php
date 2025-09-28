<?php

namespace App\Http\Controllers;

use App\Http\Requests\InterestRequest;
use App\Models\Interest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class InterestController extends Controller
{
    //

    public function index (){
        $interests = Interest::getInterestData();
        logger($interests);
        return view('forms.interests', compact('interests'));
    }

    public function store(InterestRequest $request){

        $validated = $request->validated();
        // Handle the validated data
        dd($validated);
    }
    
}
