<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChiSiamoController extends Controller
{
    public function chiSiamo() {
        $title = 'Chi Siamo';
        return view('chi-siamo', ['titolo'=>$title]);
    }
}
