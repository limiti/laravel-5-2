<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;

use App\Http\Requests;
use App\Http\Requests\CardsRequests;

class CardsController extends Controller
{
    public function index(){

       // $cards = Card::all();
        $cards = Card::with('notes')->get();

        return view('cards.index', compact('cards'));
       // return response(Card::all());
    }

    public function show(Card $card){

        return view('cards.show',compact('card'));
    }

    public function edit(Card $card){

        return view('notes.edit',compact('card'));
    }

    public function update(CardsRequests $request , Card $card){

        $validation  = $this->validate($request,[
            'title' => 'required|min:2|max:10'
        ]);


       Card::where('id', '=', $card['id'])->update(['title' => $request['title']]);



      return back();

    }
}
