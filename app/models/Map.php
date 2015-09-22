<?php
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Map extends \Eloquent {
	protected $fillable = [];

	use SoftDeletingTrait;

    public function game()
    {
        return $this->hasOne('Game'); // setting relationship to game model
    }

}