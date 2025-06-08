<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Kampus;

class LandingController extends Controller
{
//    public function index()
//     {
//         $kampus = Kampus::all();
//         return view('crashsite', compact('kampus'));
//     }

//     public function pilihKampus(Request $request)
//     {
//         $request->validate([
//             'kampus_id' => 'required|exists:kampus,id',
//         ]);

//         // Simpan ID kampus ke session
//         session(['kampus_id' => $request->kampus_id]);

//         // Redirect ke tampilan dashboard.welcome
//         return redirect()->route('dashboard.welcome');
    // }
}
