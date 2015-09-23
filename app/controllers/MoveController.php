<?php

class MoveController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function postDirection()
	{
		$id = Input::get("user_id");
		$direction = strtolower(Input::get("direction"));
		
		// find current room in DB
		$current = User::where("id", $id);
		$current = $current->player_location_id;
		
		// find room in specified direction
		$next = Map::where("id", $current);
		switch ($direction) {
			case 'north':
				$nextRoom = $next->north_map_id;
				break;
			case 'south':
				$nextRoom = $next->south_map_id;
				break;
			case 'east':
				$nextRoom = $next->east_map_id;
				break;
			case 'west':
				$nextRoom = $next->west_map_id;
				break;
		}

		// check if room exisits
		if ($nextRoom) {
			$return = $next->description;

			// set as current room
			$update = User::find($id);
			$update->player_location_id = $nextRoom;
			$update->save;
		} else {
			$return = "You can not go that way.";
		}

		// return result
		return Response::json($return);
	}
}
