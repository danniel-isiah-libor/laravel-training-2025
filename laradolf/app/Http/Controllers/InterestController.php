<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Interest;

class InterestController extends Controller
{
    public function show()
    {
        $interests = Interest::getAll();
        return view('interests', ['interests' => $interests]);
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'interests' => 'required|array',
            'interests.*' => 'string',
        ]);

        $dummyInterests = Interest::getAll();

        // Validate that all selected interests are in the dummy data
        foreach ($validated['interests'] as $interest) {
            if (!in_array($interest, $dummyInterests)) {
                return response()->json([
                    'message' => 'Invalid interest selected: ' . $interest,
                ], 422);
            }
        }

        return response()->json([
            'message' => 'Interests submitted successfully',
            'data' => $validated['interests']
        ]);
    }
}