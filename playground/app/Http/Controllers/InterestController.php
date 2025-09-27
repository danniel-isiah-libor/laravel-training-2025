<?php

namespace App\Http\Controllers;

use App\Http\Requests\InterestRequest;
use Illuminate\Http\Request;
use App\Models\Interest;

class InterestController extends Controller
{
    public function index() {

        $interest = Interest::getData();

        return view('interests',[
            'interests' => $interest
        ]);
    }

     public function store(InterestRequest $request)
    {
        $validatedForm = $request->validated();

        dd($validatedForm);
    }


}
