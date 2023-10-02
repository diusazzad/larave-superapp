<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
       $user = User::all();
       return response()->json($user);
    }


    public function getUserData($id)
    {
        $user = User::find($id);

    if (!$user) {
        return response()->json(['message' => 'User not found'], 404);
    }

    // Retrieve the user's role and permissions
    $role = $user->role;
    $permissions = $role->permissions;

    // Return the user data as a JSON response
    return response()->json([
        'user' => $user,
        'role' => $role,
        'permissions' => $permissions,
    ]);
    }


}
