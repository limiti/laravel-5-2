<?php

namespace App\Http\Controllers;

use App\Card;
use App\Note;
use Illuminate\Http\Request;
use Illuminate\Http\Middleware;

use App\Http\Requests;



class NotesController extends Controller
{
    public function store(Request $request , Card $card )
    {

/*
        $note = new Note;

        $note->body = $request->body;

        $card->notes()->save($note);
*/
        /*$card->notes()->create([
            'body' => $request->body
        ]);*/


      //  $card->notes()->create($request->all());

        $card->addNote( new Note($request->all()));

        return back();
    }
}
