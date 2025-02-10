<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Http\JsonResponse;
use App\Models\Articolo;

class ArticoliController extends Controller
{

    public function salva(Request $request)
    {
        //dd($request->all());
        // Recupero i dati dal form
        $titolo = $request->titolo;
        $categoria = $request->categoria;
        $descrizione = $request->descrizione;
        $testo = $request->testo;

        //Salvo i dati nel db con l'uso del metodo MASS ASSIGNMENT
        Articolo::create([
            'titolo' => $titolo,
            'categoria' => $categoria,
            'descrizione' => $descrizione,
            'testo' => $testo,
        ]);

        return redirect()->back()->with('message', 'Articolo inserito con successo!');
    }

    public function articolo()
    {
        $title = 'Articoli';
        return view('indice-articoli', ['titolo' => $title]);
    }

    // public function index(): JsonResponse
    // {
    //     $filePath = resource_path('json/articoli.json');

    //     if (!File::exists($filePath)) {
    //         return response()->json(['error' => 'File non trovato'], 404);
    //     }

    //     $jsonData = File::get($filePath);
    //     $data = json_decode($jsonData, true);

    //     return response()->json($data);
    // }

    public function index() {

        $articoli = Articolo::all();
        //Converto i dati provenienti da db in formato json
        return response()->json($articoli);
    }

    public function dettaglio($id)
    {
        // Recupera l'articolo in base all'ID
        $articolo = Articolo::find($id);

        if (!$articolo) {
            abort(404, 'Articolo non trovato');
        }

        return view('dettaglio-articoli', ['articolo' => $articolo]);
    }
}
