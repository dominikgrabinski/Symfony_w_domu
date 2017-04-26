<?php

namespace CodersLabBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AutorControllerTest extends WebTestCase
{
    public function testCreate()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'autorCreate');
    }

    public function testNew()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'autorNew');
    }

    public function testShow()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'showAutor');
    }

    public function testShowall()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'showAllAutor');
    }

}
