<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChiSiamoController extends Controller
{
    public $team = [
        [
            'id' => 1,
            'name' => 'Dr.ssa Maria Rossi',
            'role' => 'Medico e Specialista in Medicina Generale',
            'image' => 'images/dottoressa.jpg',
            'description' => 'La Dr.ssa Rossi è una professionista esperta nel campo della medicina generale con un focus sulla prevenzione...',
            'fun_fact' => 'Ama la fotografia e ha un cane di nome Max.'
        ],
        [
            'id' => 2,
            'name' => 'Laura Bianchi',
            'role' => 'Esperta di Fitness e Personal Trainer',
            'image' => 'images/esperta-fitness.jpg',
            'description' => 'Laura è una personal trainer certificata che aiuta le persone a raggiungere i loro obiettivi di fitness...',
            'fun_fact' => 'È una campionessa di maratona e adora il gelato!'
        ],
        [
            'id' => 3,
            'name' => 'Chiara Verdi',
            'role' => 'Psicologa e Psicoterapeuta',
            'image' => 'images/esperta-psicologa.jpg',
            'description' => 'La Prof.ssa Verdi è una psicologa con un\'ampia esperienza nel trattamento di ansia, stress e disturbi emotivi. Il suo approccio terapeutico si concentra sulla crescita personale e sulla gestione delle emozioni attraverso tecniche cognitive e comportamentali.',
            'fun_fact' => 'Adora fare giardinaggio e ha un piccolo orto urbano dove coltiva pomodori, basilico e peperoncini!'
        ],
        [
            'id' => 4,
            'name' => 'Giulia Santoro',
            'role' => 'Esperta di Nutrizione e Dietista',
            'image' => 'images/esperta-nutrizione.jpg',
            'description' => 'Giulia è una dietista esperta che aiuta le persone a comprendere l\'importanza di una dieta equilibrata. Con la sua guida, potrai imparare come alimentarti in modo sano ed equilibrato, migliorando così il tuo benessere a lungo termine.',
            'fun_fact' => 'Una volta ha partecipato a una gara di arrampicata sportiva e ha vinto una medaglia d\'oro!'
        ],
        
    ];

    public function chiSiamo() {
        $title = 'Chi Siamo';
        return view('chi-siamo', ['titolo'=>$title, 'team' => $this->team]);
    }

    public function dettaglioChiSiamo($id) {
        foreach($this->team as $member) {
            if($id == $member['id']) {
                return view('dettaglio-chi-siamo', ['membro' => $member]);
            }
        }
    }
}
