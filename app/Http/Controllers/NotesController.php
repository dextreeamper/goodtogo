<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;
use App\Note;

class NotesController extends Controller
{
    public function store(Request $request, Card $card) 
    {
    	// return $request->all(); //displaying sample data in json

    	// $note = new Note;
    	// $note->body = $request->body;
    	// $card->notes()->save($note);

    	// $card->notes()->save(
    	// 	new Note(['body' => $request->body])
    	// );

    	// $card->notes()->create([
    	// 	'body' => $request->body
    	// ]);

    	// $card->notes()->create($request->all()); // []

    	$card->addNote(
    		new Note($request->all())
    	);

    	return back();
    }
    public function edit(Note $note) 
    {
    	return view('notes.edit', compact('note'));
    }
    public function update(Request $request, Note $note) 
    {
		// dd('hit'); //die and dump
    	$note->update($request->all());

    	return back();
    }

}







