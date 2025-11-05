<?php
	use \Core\Route;
	
	return [
		new Route('/', 'hello', 'index'), // route for the welcome page, can be deleted
		new Route('/my-page1/', 'page', 'show1'), 
		new Route('/my-page2/', 'page', 'show2'), 
		new Route('/test1/', 'test', 'act1'), 
		new Route('/test2/', 'test', 'act2'), 
		new Route('/test3/', 'test', 'act3'), 
	];
	
