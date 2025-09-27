<?php
namespace App\Http\Controllers;

use App\Http\Requests\StoreInterestRequest;
use App\Models\Interest;

class InterestController extends Controller
{
    public function index()
    {
        $data = Interest::getData();

        return view('interests', [
            'interests' => $data,
        ]);
    }

    public function store(StoreInterestRequest $request)
    {
        $validateForm = $request->validated();
        dd($validateForm);
    }
}
