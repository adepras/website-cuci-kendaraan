<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profile()
    {
        $user = Auth::user();
        $vehicles = Vehicle::where('user_id', $user->id)->orderBy('vehicle_brand')->get();
        return view('profile.profile', compact('user', 'vehicles'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        // Validasi data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'phone_number' => 'required|string|max:15',
            'gender' => 'required|string|in:male,female',
            'address' => 'required|string|max:255',
        ]);

        // Perbarui data pengguna
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'gender' => $request->gender,
            'address' => $request->address,
        ]);

        return response()->json(['success' => true]);
    }
}
