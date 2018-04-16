<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * @param Request $request
     * @return array
     */
    public function signUp(Request $request)
    {
        $user = new User;
        $user->email    = $request->input('email');
        $user->password = $request->input('password');

        $user->save();

        return [
            'data' => [
                'id'    => $user->id,
                'name'  => $user->name,
                'email' => $user->email,
            ]
        ];
    }
}
