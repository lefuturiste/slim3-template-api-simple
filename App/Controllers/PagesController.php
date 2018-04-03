<?php

namespace App\Controllers;

use Monolog\Logger;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Exception\NotFoundException;

class PagesController extends Controller
{
	public function getHome(ServerRequestInterface $request, ResponseInterface $response)
	{
		$this->container->get(Logger::class)->info('Hello');

		throw new NotFoundException($request, $response);
	}
}