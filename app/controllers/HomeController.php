<?php

class HomeController extends BaseController {

	public function getIndex()
	{
        $projects = Project::paginate(2);
		return View::make('home.index')->with('projects', $projects);
	}


}
