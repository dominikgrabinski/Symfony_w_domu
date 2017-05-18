<?php

namespace StaticBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class StaticControllerTest extends WebTestCase
{
    public function testAll()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/all');
    }

    public function testRestricted()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/restricted');
    }

}
