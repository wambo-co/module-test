<?php

namespace Wambo\Test;

use Slim\Http\Response;

class Test
{
    /**
     * @param $app \Wambo\Core\App
     */
    public function __construct($app)
    {
        $app->get('/test', function ($request, $response, $args) {
            /** @var $response Response */
            $response->write("Hello TEST Wambo!");
            return $response;
        });
    }
}
