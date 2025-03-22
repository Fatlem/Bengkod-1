<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obat;
use Illuminate\Support\Facades\Validator;

class ObatController extends Controller
{
    public function index()
    {
        $obats = Obat::all();
        return response()->json($obats);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_obat' => 'required|string|max:255',
            'kemasan' => 'required|string',
            'harga' => 'required|integer',
        ], [
            'nama_obat.required' => "Nama obat cannot be nil",
            'kemasan.required' => "Kemasan cannot be nil",
            'harga.required' => "Harga cannot be nil",
            'harga.integer' => "Harga must be an integer",
        ]);

        $obat = Obat::create([
            'nama_obat' => $request->nama_obat,
            'kemasan' => $request->kemasan,
            'harga' => $request->harga,
        ]);

        return response()->json($obat, 201);
    }

    public function show($id)
    {
        $obat = Obat::find($id);
        if (!$obat) {
            return response()->json(['message' => 'Obat not found'], 404);
        }
        return response()->json($obat);
    }

    public function update(Request $request, $id)
    {
        $obat = Obat::find($id);
        if (!$obat) {
            return response()->json(['message' => 'Obat not found'], 404);
        }

        $request->validate([
            'nama_obat' => 'required|string|max:255',
            'kemasan' => 'required|string',
            'harga' => 'required|integer',
        ], [
            'nama_obat.required' => "Nama obat cannot be nil",
            'kemasan.required' => "Kemasan cannot be nil",
            'harga.required' => "Harga cannot be nil",
            'harga.integer' => "Harga must be an integer",
        ]);

        $obat->update([
            'nama_obat' => $request->nama_obat,
            'kemasan' => $request->kemasan,
            'harga' => $request->harga,
        ]);

        return response()->json($obat);
    }

    public function destroy($id)
    {
        $obat = Obat::find($id);
        if (!$obat) {
            return response()->json(['message' => 'Obat not found'], 404);
        }

        $obat->delete();
        return response()->json(['message' => 'Obat deleted']);
    }
}
