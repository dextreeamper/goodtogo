<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    public function notes() 
    {
		return $this->hasMany(Note::class); //App\Class
    }
    // public function addNote(Note $note) 
    // {
    // 	return $this->note()->save($note);
    // }
    public function addNote(Note $note)
    {
    	return $this->notes()->save($note);
    }
}
