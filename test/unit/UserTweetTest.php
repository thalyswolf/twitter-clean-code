<?php
namespace Tests;


use App\Domain\Entity\UserTweet;
use App\Domain\Entity\ValueObject\Name;
use PHPUnit\Framework\TestCase;

class UserTweetTest extends TestCase {

    public function testShallCreateObject()
    {
        $userTweet = new UserTweet(new Name('Thalys Wolf'));
        $this->assertSame('Thalys Wolf', $userTweet->getTweetUserName());
    }

}
