<?php

namespace App\Controllers;

use Monolog\Logger;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class PagesController extends Controller
{
	public function getHome(ServerRequestInterface $request, ResponseInterface $response)
	{
		$this->container->get(Logger::class)->info('Hello');

//		return a 404 http error
//		throw new NotFoundException($request, $response);

//		return json
		return $response->withJson([
			'This is the main page of the API!',
			'Welcome in your application!'
		]);
	}
}