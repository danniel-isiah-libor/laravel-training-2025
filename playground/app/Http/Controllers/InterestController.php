<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInterestRequest;
use App\Models\Interest;
use Illuminate\Http\Request;

class InterestController extends Controller
{
    //

    public function index(){
        $interests= Interest::fetchData();
        return view('interests', ['interests'=>$interests]);
    }

    public function store(StoreInterestRequest $request){
        $validated = $request->validated();
        dd($validated);
    }
}
