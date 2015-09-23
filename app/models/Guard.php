<?php

class Guard extends \Eloquent {
	protected $fillable = [];

	public function maps()
    {
        return $this->hasMany('Map'); // setting relation of Foreign Key to Map->location
    }
}