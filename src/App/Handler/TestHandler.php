<?php

declare(strict_types=1);

namespace App\Handler;

use Laminas\Diactoros\Response\TextResponse;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class TestHandler implements RequestHandlerInterface
{
    public function handle(ServerRequestInterface $request): TextResponse
    {
        $uri = $request->getUri();
        $path = $uri->getPath();

        return new TextResponse('You visited ' . $path, 200, ['X-Path' => $path]);
    }
}
