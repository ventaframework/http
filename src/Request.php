<?php declare(strict_types = 1);

namespace Abava\Http;

use Abava\Http\Contract\Request as RequestContract;
use Zend\Diactoros\ServerRequest;

/**
 * Class Request
 *
 * @package Abava\Http
 */
class Request extends ServerRequest implements RequestContract
{
}