<?php

namespace App\Infra\Repository;

use App\Domain\Contract\TweetRepositoryContract;
use App\Domain\Entity\Tweet;
use App\Infra\Database\DB;

class TweetRepositoryMySQL implements TweetRepositoryContract {

    public function __construct(private DB $db)
    {}

    public function save(Tweet $tweet)
    {
        // $this->db->execu....
    }
}
