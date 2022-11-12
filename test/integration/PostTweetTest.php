<?php
namespace Tests;

use App\Application\UseCase\PostTweet\PostTweet;
use App\Application\UseCase\PostTweet\PostTweetInput;
use App\Infra\Repository\TweetRepositoryMemory;
use App\Infra\ThirdParty\Env\PhpDotEnvAdapter;
use PHPUnit\Framework\TestCase;

class PostTweetTest extends TestCase {

    public function testShallPostTweet()
    {
        PhpDotEnvAdapter::load(__DIR__ . '/../../');

        // new TweetRepositoryMySQL(new MySQL());

        $postTweet = new PostTweet(
            new TweetRepositoryMemory()
        );

        $input = new PostTweetInput();
        $input->text = 'texto do tweet';
        $input->username = '@thalyswolf';

        $this->assertEmpty($postTweet->execute($input));
    }

}
