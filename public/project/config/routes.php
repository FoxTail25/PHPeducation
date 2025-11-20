<?php
	use \Core\Route;
	
	return [
		new Route('/', 'hello', 'index'), // route for the welcome page, can be deleted
		new Route('/my-page1/', 'page', 'show1'), 
		new Route('/my-page2/', 'page', 'show2'), 
		new Route('/test1/', 'test', 'act1'), 
		new Route('/test2/', 'test', 'act2'), 
		new Route('/test3/', 'test', 'act3'), 
		new Route('/test/all/', 'page', 'testAll'), 
		new Route('/test/:id/', 'page', 'test'), 
		new Route('/num/:n1/:n2/:n3/', 'num', 'sum'), 
		new Route('/user/all/', 'user', 'all'), 
		new Route('/user/:id/', 'user', 'show'), 
		new Route('/product/all/', 'product', 'all'), 
		new Route('/product/:n/', 'product', 'show'), 
		new Route('/user/first/:n/', 'user', 'first'), 
		new Route('/user/:id/:key/', 'user', 'info'), 
		new Route('/page/:pageNum/', 'page', 'show'), 
	];
	
