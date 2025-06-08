<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'identifier' => 'required|string', 
            'password' => 'required|string',
        ]);

        $user = User::where(function ($query) use ($request) {
            $query->where('email', $request->identifier)
                  ->orWhere('nip', $request->identifier);
        })->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'message' => 'Email/NIP atau password salah.'
            ], 401);
        }

        $token = $user->createToken('api_token')->plainTextToken;

        return response()->json([
            'message' => 'Login berhasil',
            'token' => $token,
            'user' => [
                'id_user' => $user->id_user,
                'nama' => $user->nama,
                'nip' => $user->nip,
                'email' => $user->email,
                
            ]
        ], 200);
    }

    // Method baru untuk get user saat ini
    public function user(Request $request)
    {
        return response()->json($request->user(), 200);
    }
}
