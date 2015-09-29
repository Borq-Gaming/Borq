<?php

class Guard extends \Eloquent {
	protected $fillable = [];

	public function map()
    {
        return $this->belongsTo('Map'); // setting relation of Foreign Key to Map->location
    }
}