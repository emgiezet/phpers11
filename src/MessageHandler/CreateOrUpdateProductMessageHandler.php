<?php

namespace App\MessageHandler;
use App\Message\CreateOrUpdateProductMessage;
use Psr\Log\LoggerInterface;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
class CreateOrUpdateProductMessageHandler
{
    public function __construct(private LoggerInterface $logger)
    {
    }
    public function __invoke(CreateOrUpdateProductMessage $message): void
    {
        $this->logger->info('logged: '.CreateOrUpdateProductMessage::class);
    }
}
