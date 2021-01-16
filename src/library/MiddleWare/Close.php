<?php

declare(strict_types=1);

namespace App\Ebcms\Web\Middleware;

use App\Ebcms\Admin\Traits\ResponseTrait;
use Ebcms\App;
use Ebcms\Config;
use Ebcms\ResponseFactory;
use Ebcms\StreamFactory;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

class Close implements MiddlewareInterface
{
    use ResponseTrait;

    public function process(
        ServerRequestInterface $request,
        RequestHandlerInterface $handler
    ): ResponseInterface {
        return App::getInstance()->execute(function (
            Config $config,
            ResponseFactory $responseFactory,
            StreamFactory $streamFactory
        ) use ($request, $handler): ResponseInterface {
            if ($config->get('site.close@ebcms.web')) {
                return $responseFactory->createResponse(200)->withBody($streamFactory->createStream($config->get('site.close_reason@ebcms.web') ?: '维护中...'));
            }
            return $handler->handle($request);
        });
    }
}
