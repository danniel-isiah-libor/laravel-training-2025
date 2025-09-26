<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __invoke()
    {
        return 'User Information';
    }

    public function show(Request $request, $id = null)
    {
        $user = User::getData($id);

        if ($id && ! $user) {
            return '<h1>User not found.</h1>';
        }

        if ($id) {
            return "<h1>User Profile</h1>
                <p><strong>Name:</strong> {$user['name']}</p>
                <p><strong>Email:</strong> {$user['email']}</p>";
        }

        $users = array_map(
            fn($uid, $info) => "<p>{$uid} - {$info['name']} ({$info['email']})</p>",
            array_keys($user),
            $user
        );

        return "<h1>All Users</h1><div>" . implode('', $users) . "</div>";
    }

}
