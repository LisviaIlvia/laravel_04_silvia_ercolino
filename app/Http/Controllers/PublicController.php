<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function homepage()
    {
        $title = 'Il blog della salute';
        return view('homepage', ['titolo' => $title]);
    }

    public function contattaci()
    {
        return view('contattaci');
    }

    public function thankYou()
    {
        return view('thankYou');
    }

    public function submit(Request $request)
    {
        $name = $request->input('username');
        $email = $request->input('email');
        $message = $request->input('message');

        // Invia l'email con i dati necessari
        Mail::to($email)->send(new ContactMail($name, $email, $message));

        // redirect ad una pagina custom - "thank you page"
        return redirect()->route('thankYou.page');
    }

    public function aggiungi() {
        return view('/aggiungi-articolo');
    }
}
