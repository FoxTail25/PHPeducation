<?php
	use \Core\Route;
	
	return [
		new Route('/hello/', 'hello', 'index'), // route for the welcome page, can be deleted
		new Route('/my-page1/','page', 'show1'),
		new Route('/my-page2/','page', 'show2')
	];
	
