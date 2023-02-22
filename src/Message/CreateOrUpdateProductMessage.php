<?php

namespace App\Message;

class CreateOrUpdateProductMessage
{
    private $content;
    
    public function __construct(string $content)
    {
        $this->content = $content;
    }
    
    public function getContent(): string
    {
        return $this->content;
    }

}
