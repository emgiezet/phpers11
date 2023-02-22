<?php

namespace App\MessageHandler;
use App\Message\CreateProductMessage;
use Psr\Log\LoggerInterface;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
class CreateProductMessageHandler
{
    public function __construct(private LoggerInterface $logger)
    {
    }
    
    public function __invoke(CreateProductMessage $message): void
    {
        $this->logger->info('logged: '. CreateProductMessage::class);
    
    }
}
