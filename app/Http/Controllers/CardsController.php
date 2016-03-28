<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;

use App\Http\Requests;

class CardsController extends Controller
{
    public function index(){

        $cards = Card::all();

        return view('cards.index', compact('cards'));
    }

    public function show(Card $card){

        return view('cards.show',compact('card'));
    }
}
