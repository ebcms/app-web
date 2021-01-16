<?php

declare(strict_types=1);

namespace App\Ebcms\Web\Http;

use App\Ebcms\Admin\Traits\ResponseTrait;
use App\Ebcms\Admin\Traits\RestfulTrait;
use App\Ebcms\Web\Middleware\Close;
use Ebcms\App;
use Ebcms\Hook;
use Ebcms\RequestHandler;

abstract class Common
{
    use RestfulTrait;
    use ResponseTrait;

    public function __construct()
    {
        App::getInstance()->execute(function (
            RequestHandler $requestHandler,
            Hook $hook
        ) {
            $hook->emit('app.ebcms.web.construct');
            $requestHandler->lazyPrependMiddleware(Close::class);
        });
    }

    public function __destruct()
    {
        App::getInstance()->execute(function (
            Hook $hook
        ) {
            $hook->emit('app.ebcms.web.destruct');
        });
    }
}
