<?php

namespace Wambo\Test;

use Slim\Views\PhpRenderer;

class Test
{
    /**
     * @param $app \Wambo\Core\App
     */
    public function __construct($app)
    {
        // Get container
        $container = $app->getContainer();

        // Register component on container
        $container['view'] = function ($container) {
            $path = realpath( dirname(__FILE__) . '/../view') . '/';
            return new PhpRenderer($path);
        };

        $app->get('/test', function ($request, $response, $args) {
            return $this->view->render($response, 'test.php', [
                'name' => $args['name']
            ]);
        });
    }
}
