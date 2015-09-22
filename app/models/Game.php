<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Game extends \Eloquent {
	protected $fillable = [];

	use SoftDeletingTrait;

    public function map()
    {
        return $this->belongsTo('Map', 'location'); // setting relation of Foreign Key to Map->location
    }


}