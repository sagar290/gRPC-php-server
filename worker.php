<?php

/**
 * Sample GRPC PHP server.
 */

require __DIR__ . '/vendor/autoload.php';

use Chat\ChatServiceInterface;
use Services\ChatService;
use Spiral\RoadRunner\GRPC\Server;
use Spiral\RoadRunner\Worker;

$server = new Server(null, [
    'debug' => true, // optional (default: false)
]);

$server->registerService(ChatServiceInterface::class, new ChatService());

$server->serve(Worker::create());
