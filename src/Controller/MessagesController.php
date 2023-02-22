<?php
namespace App\Controller;

use App\Message\CreateOrUpdateProductMessage;
use App\Message\CreateProductMessage;
use App\Message\SmsNotification;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;

class MessagesController extends AbstractController
{
    #[Route('/messages/test', name: 'app_messages_test')]
    public function test(MessageBusInterface $bus)
    {
        // will cause the SmsNotificationHandler to be called
        
        return new Response('test');
        
        // ...
    }
    #[Route('/messages/sync', name: 'app_messages_sync')]
    public function sync(MessageBusInterface $bus)
    {
        // will cause the SmsNotificationHandler to be called
        $bus->dispatch(new CreateProductMessage('Look! I created a message!'));
        
        return new JsonResponse('sync sent');
        
        // ...
    }
    #[Route('/messages/async', name: 'app_messages_async')]
    public function async(MessageBusInterface $bus)
    {
        // will cause the SmsNotificationHandler to be called
        $bus->dispatch(new CreateOrUpdateProductMessage('Look! I created an async message!'));
        return new JsonResponse('async sent');
        
        // ...
    }
}
