<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

use App\Models\Login;

class LoginController extends Controller
{

    public function login(Request $request)
    {
        $credentials = $request->only('id_card_number', 'password');
        $remember = true;

        if (!(Auth::attempt($credentials, $remember))) {
            return response()->json([
                'message' => 'id or password incorrect'
            ], 401);
        }
        
        return response()->json(Login::LoginResponse($credentials['id_card_number']), 200);
    }
}
