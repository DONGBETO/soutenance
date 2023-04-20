<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class InscriptionController extends Controller
{

    Public function create():View{

        return view('inscription');
    }

    Public function store(Request $inscriptionRequest){

        $validInscription = collect($inscriptionRequest->validate([
            'Nom' => ['required','string' , 'max : 25'],
            'Prenoms' => ['required', 'string' , 'max : 100'],
            'Email' => ['required' , 'email' , 'max : 255'],
            'Téléphone' => ['required', 'numeric' , 'max : 8'],
            'Adresse' => ['required' , 'string' ,'max : 30' ],
            'Password' => ['required' , 'min : 8']
        ]));

        /*Client::create($validInscription->all());
        return route('connexion');*/
    }
   
}
