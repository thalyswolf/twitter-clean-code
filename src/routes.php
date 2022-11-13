<?php

use App\Infra\Factory\PostTweetFactory;
use App\Infra\ThirdParty\Http\SlimHttpAdapter;
use Slim\Factory\AppFactory;

$http = new SlimHttpAdapter(AppFactory::create());

$http->on('post', '/post-tweet', new PostTweetFactory, []);

$http->run();