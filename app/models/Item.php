<?php

class Item extends \Eloquent {
	protected $fillable = [];

    public function map()
    {
    	return $this->belongsTo('Map');
    }
}