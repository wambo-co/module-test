<?php

namespace Wambo\Test;

use Slim\Http\Response;
use Wambo\Core\App;
use Wambo\Core\Module\ModuleBootstrapInterface;

class Test implements ModuleBootstrapInterface
{
    /**
     * @param $app \Wambo\Core\App
     */
    public function __construct(App $app)
    {
        $app->get('/test', function ($request, $response) {
            /** @var $response Response */
            $response->write("Hello form Test Module!");
            return $response;
        });
    }
}
