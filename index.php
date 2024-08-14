<?php

require 'vendor/autoload.php';

use Bramus\Router\Router;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Output\BufferedOutput;

$router = new Router();

$router->post('/create', function() {
    $output = new BufferedOutput();
    $table = new Table($output);
    
    $input = json_decode(file_get_contents('php://input'), true);
    header('Content-Type: text/plain');
    
    // Ensure all keys are provided
    if (!isset($input['table']['headers'], $input['table']['rows'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Incorrect json format!']);
        return;
    }
    
    $table->setHeaders($input['table']['headers']);
    $table->addRows($input['table']['rows']);
    $table->render();
    
    echo $output->fetch();
});

$router->run();
