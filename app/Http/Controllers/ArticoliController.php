<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Http\JsonResponse;

class ArticoliController extends Controller
{
    public function articolo() {
        $title = 'Articoli';
        return view('indice-articoli', ['titolo'=>$title]);
    }

    public function index(): JsonResponse
    {
        $filePath = resource_path('json/articoli.json');

        if (!File::exists($filePath)) {
            return response()->json(['error' => 'File non trovato'], 404);
        }

        $jsonData = File::get($filePath);
        $data = json_decode($jsonData, true);

        return response()->json($data);
    }

    public function dettaglio($id)
    {
        // Recupera l'articolo in base all'ID
        $articolo = collect(json_decode(file_get_contents(public_path('json/articoli.json')), true))
                        ->firstWhere('id', $id);

        if (!$articolo) {
            abort(404, 'Articolo non trovato');
        }

        return view('dettaglio-articoli', ['articolo' => $articolo]);
    }
}
