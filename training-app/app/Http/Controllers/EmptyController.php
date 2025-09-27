<?php
// current controller used
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;

class EmptyController extends Controller
{
    public function show(Request $request, $id = null){

        $data = User::FetchData($id);
        
        // dd($data);

                //     return '<ul>
                //     <li>Name: '.$data->name.'</li>
                //     <li>Age: '.$data->age.'</li>
                //     <li>Address: '.$data->address.'</li>
                //     <li>Address: '.$data->email.'</li>
                // </ul>';

        return view('user-profile', ['data' => $data]);

    }
}
