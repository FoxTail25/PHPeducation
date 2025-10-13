<?php
	use \Core\Route;
	
	return [
		new Route('/hello/', 'hello', 'index'), // route for the welcome page, can be deleted
		new Route('/my-page1/','page', 'show1'),
		new Route('/my-page2/','page', 'show2'),
		new Route('/my-act/','page', 'act'),
		new Route('/my-act1/','test', 'act1'),
		new Route('/my-act2/','test', 'act2'),
		new Route('/my-act3/','test', 'act3'),
		new Route('/user/all/', 'user', 'all'),
		new Route('/user/:id/', 'user', 'show'),
		new Route('/product/all/', 'product', 'all'),
		new Route('/product/:pn/', 'product', 'show'),
		new Route('/user/first/:n/', 'user', 'first'),
		new Route('/user/:id/:key/', 'user', 'info'),
		new Route('/nums/:n1/:n2/:n3/', 'num', 'sum')
	];
	
