<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function __invoke(){
        return 'User Information';
    }


    public function show(Request $request, $id = null){
        // If $id is 'all' or not numeric, show all users
        if ($id === null || $id === 'all' || !is_numeric($id)) {
            $users = User::getData(null);
            if (empty($users)) {
                return '<h3>No users found</h3>';
            }
            $html = '<ul>';
            foreach ($users as $uid => $user) {
                $html .= '<li>';
                $html .= "<strong>User $uid:</strong><ul>";
                foreach ($user as $key => $value) {
                    $html .= "<li><strong>$key:</strong> $value</li>";
                }
                $html .= '</ul></li>';
            }
            $html .= '</ul>';
            return $html;
        }

        $user = User::getData($id);
        if (!$user) {
            return '<h3>User not found</h3>';
        }
        $html = '<ul>';
        foreach ($user as $key => $value) {
            $html .= "<li><strong>$key:</strong> $value</li>";
        }
        $html .= '</ul>';
        return $html;
    }
}
