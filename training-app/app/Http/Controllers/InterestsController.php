<?php

namespace App\Http\Controllers;
use App\Models\Interests;
use Illuminate\Http\Request;
use App\Http\Requests\StoreInterestsRequest;
use Illuminate\Support\Facades\DB;
class InterestsController extends Controller
{
        public function show(){

                $data = Interests::all();

                return view('interests', ['data' => $data]);

            }

            public function store(StoreInterestsRequest $request){
                
                dd($request);

                // Interests::create([
                //     'interests' => $request->interests,
                //     'description' => $request->description
                // ]);

                // return redirect()->back()->with('success', 'Interests added successfully!');

            }

}
