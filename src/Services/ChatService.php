<?php

namespace Services;

use Chat\ChatServiceInterface;
use Chat\Message;
use Spiral\RoadRunner\GRPC\ContextInterface;

class ChatService implements ChatServiceInterface
{

    public function SayHello(ContextInterface $ctx, Message $in): \Chat\Message
    {
        $out = new Message();

        // message from client
        printf("%s\n", $in->getBody());

        return $out->setBody(date('Y-m-d H:i:s') . ': Hello from server');
    }
}