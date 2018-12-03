<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Get Users
     *
     * @return [json] users object
     */
    public function getUsers()
    {
        return response()->json( User::get() );
    }

    /**
     * Get the authenticated User
     *
     * @return [json] a user object
     */
    public function getUser(Request $request)
    {
        return response()->json($request->user());
    }
}
