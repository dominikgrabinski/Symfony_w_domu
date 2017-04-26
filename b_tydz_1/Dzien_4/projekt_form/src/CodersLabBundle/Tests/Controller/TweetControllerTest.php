<?php

namespace CodersLabBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TweetControllerTest extends WebTestCase
{
    public function testCreate()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/tweetCreate');
    }

    public function testNew()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/tweetNew');
    }

    public function testShowall()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'tweetShowAll');
    }

}
