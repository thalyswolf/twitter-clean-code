<?php
namespace App\Domain\Entity;

use App\Domain\Entity\ValueObject\Name;

class UserTweet {
    
    public function __construct(private Name $username)
    {}

    public function getTweetUserName()
    {
        return $this->username->getName();
    }

}
