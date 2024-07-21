<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VehicleController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'vehicle_brand' => 'required|string|max:100',
            'vehicle_type' => 'required|string|max:100',
            'license_plate' => 'required|string|max:20',
        ]);

        Vehicle::create([
            'user_id' => auth()->id(),
            'vehicle_brand' => $request->vehicle_brand,
            'vehicle_type' => $request->vehicle_type,
            'license_plate' => $request->license_plate,
        ]);

        return redirect()->back()->with('success', 'Data kendaraan berhasil ditambahkan.');
    }

    public function index()
    {
        $vehicles = Vehicle::where('user_id', auth()->id())->orderBy('vehicle_brand')->get();
        return view('profile', compact('vehicles'));
    }

    public function destroy($id)
    {
        $vehicle = Vehicle::findOrFail($id);
        $vehicle->delete();

        return redirect()->back()->with('success', 'Data kendaraan berhasil dihapus.');
    }

}
