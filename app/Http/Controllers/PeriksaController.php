<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Periksa;
use Illuminate\Support\Facades\Validator;

class PeriksaController extends Controller
{
    public function index()
    {
        $periksas = Periksa::all();
        return response()->json($periksas);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_pasien' => 'required|integer',
            'id_dokter' => 'required|integer',
            'tgl_periksa' => 'required|date',
            'catatan' => 'required|string',
            'biaya_periksa' => 'required|integer',
        ], [
            'id_pasien.required' => "ID pasien cannot be nil",
            'id_dokter.required' => "ID dokter cannot be nil",
            'tgl_periksa.required' => "Tanggal periksa cannot be nil",
            'catatan.required' => "Catatan cannot be nil",
            'biaya_periksa.required' => "Biaya periksa cannot be nil",
            'biaya_periksa.integer' => "Biaya periksa must be an integer",
        ]);

        $periksa = Periksa::create([
            'id_pasien' => $request->id_pasien,
            'id_dokter' => $request->id_dokter,
            'tgl_periksa' => $request->tgl_periksa,
            'catatan' => $request->catatan,
            'biaya_periksa' => $request->biaya_periksa,
        ]);

        return response()->json($periksa, 201);
    }

    public function show($id)
    {
        $periksa = Periksa::find($id);
        if (!$periksa) {
            return response()->json(['message' => 'Periksa not found'], 404);
        }
        return response()->json($periksa);
    }

    public function update(Request $request, $id)
    {
        $periksa = Periksa::find($id);
        if (!$periksa) {
            return response()->json(['message' => 'Periksa not found'], 404);
        }

        $request->validate([
            'id_pasien' => 'required|integer',
            'id_dokter' => 'required|integer',
            'tgl_periksa' => 'required|date',
            'catatan' => 'required|string',
            'biaya_periksa' => 'required|integer',
        ], [
            'id_pasien.required' => "ID pasien cannot be nil",
            'id_dokter.required' => "ID dokter cannot be nil",
            'tgl_periksa.required' => "Tanggal periksa cannot be nil",
            'catatan.required' => "Catatan cannot be nil",
            'biaya_periksa.required' => "Biaya periksa cannot be nil",
            'biaya_periksa.integer' => "Biaya periksa must be an integer",
        ]);

        $periksa->update([
            'id_pasien' => $request->id_pasien,
            'id_dokter' => $request->id_dokter,
            'tgl_periksa' => $request->tgl_periksa,
            'catatan' => $request->catatan,
            'biaya_periksa' => $request->biaya_periksa,
        ]);

        return response()->json($periksa);
    }

    public function destroy($id)
    {
        $periksa = Periksa::find($id);
        if (!$periksa) {
            return response()->json(['message' => 'Periksa not found'], 404);
        }

        $periksa->delete();
        return response()->json(['message' => 'Periksa deleted']);
    }
}
