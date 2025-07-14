<?php

namespace App\Http\Controllers;

use App\Models\Publikasi;
use Illuminate\Http\Request;

class PublikasiController extends Controller
{
    public function index()
    {
        return response()->json(Publikasi::all());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'releaseDate' => 'required|date',
            'description' => 'nullable|string',
            'coverUrl' => 'nullable|url',
        ]);

        $publikasi = Publikasi::create($validated);
        return response()->json($publikasi, 201);
    }

    public function show($id)
{
    $publikasi = Publikasi::findOrFail($id);
    return response()->json($publikasi);
}

public function update(Request $request, $id)
{
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'releaseDate' => 'required|date',
        'description' => 'nullable|string',
        'coverUrl' => 'nullable|url',
    ]);

    $publikasi = Publikasi::findOrFail($id);
    $publikasi->update($validated);

    return response()->json($publikasi);
}

public function destroy($id)
{
    $publikasi = Publikasi::findOrFail($id);
    $publikasi->delete();

    return response()->json(['message' => 'Publikasi berhasil dihapus']);
}

}