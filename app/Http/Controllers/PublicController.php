<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage() {
        $title = 'Il blog della salute';
        return view('homepage', ['titolo'=> $title]);
    }
}
