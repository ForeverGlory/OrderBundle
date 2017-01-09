<?php

namespace Glory\Bundle\OrderBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AdminControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/admin/order');
    }

    public function testView()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/admin/order/{id}');
    }

}
