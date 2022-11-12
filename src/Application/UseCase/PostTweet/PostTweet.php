<?php

namespace App\Application\UseCase\PostTweet;

use App\Domain\Contract\TweetRepositoryContract;
use App\Domain\Entity\Tweet;
use App\Domain\Entity\UserTweet;
use App\Domain\Entity\ValueObject\Name;
use DateTime;

class PostTweet {

    public function __construct(private TweetRepositoryContract $tweetRepositoryContract)
    {}

    public function execute(PostTweetInput $input) 
    {
        $tweet = new Tweet();
        $tweet->setText($input->text);
        $tweet->setDate(new DateTime());
        $tweet->setUserTweet(new UserTweet(new Name($input->username)));

        $this->tweetRepositoryContract->save($tweet);
    }

}
