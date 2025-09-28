<?php

namespace App\Http\Controllers;

use App\Http\Requests\InterestRequest;
use App\Models\Interest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class InterestController extends Controller
{
    //

    public function index (){
        $interests = Interest::getInterestData();
        return view('forms.interests', compact('interests'));
    }

    public function store(InterestRequest $request){

        $validated = $request->validated();
        // Handle the validated data
        dd($validated);
    }

    public function show(User $user){
        return view('forms.interests', compact('user'));
    }
}
