<?php

class UseController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function postStuff()
	{
		$item1 = strtolower(Input::get("item1"));
		$item2 = strtolower(Input::get("item2"));

		// check if object 1 is in backpack
		if ($this->doesHave($item1)) {
			// check if object 2 is usable (hit use db and check  col 2)
			// check if objects are compatible
			if ($this->canUse($item2)) {
				$action = Action::where("item_1", $item1)->firstOrFail();
				$actionLocation = $action->location;

				//get player location
				$current = Auth::user();
				$current = $current->player_location_id;

				if ($actionLocation == $current) {
					$return = $action->result;
					$this->clearItem($item1);
				} else {
					$return = "You can't do that here.";
				}
			} else {
				$return = "You can not use those item together";
			}
		} else {
			$return = "You don't have the " . $item1;
		}

		// return results
		return Response::json($return);
	}

	public function doesHave($item)
	{
		// does have the item?
		$thing = Auth::user();
		$thing = $thing->$item;

		if ($thing) {

			// is it useable
			$useable = Action::where("item_1", $item)->firstOrFail();

			if ($useable) {
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}

	public function canUse($item)
	{
		// is it useable
		$useable = Action::firstOrFail();
		$useable = $useable->item_2;

		if ($useable == $item) {
			return true;
		} else {
			return false;
		}
	}

	public function clearItem($item)
	{
		$update = Auth::user();
		$update->$item = NULL;
		$update->save();
	}
}

