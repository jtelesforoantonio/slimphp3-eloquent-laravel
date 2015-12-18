<?php

/**
 * @author Jonathan T.A <jonyjony777@gmail.com>
 */
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

/**
 * Index Page
 */
$app->get('/', function(Request $request, Response $response, $args) {
    try {
        $data = [
            'user' => 'developer',
        ];
        return $this->view->render($response, 'base/index.html.twig', $data);
    } catch (Exception $e) {
        $this->log->error($e);
    }
});

