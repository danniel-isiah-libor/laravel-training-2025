<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInterestRequest;
use App\Models\Interest;
use Illuminate\Http\Request;

class InterestController extends Controller
{
    public function index()
    {
        $data = Interest::getData();

        return view('interests', [
            'interests' => $data
        ]);
    }

    public function store(StoreInterestRequest $request)
    {
        $validatedForm = $request->validated();

        dd($validatedForm);
    }
}
