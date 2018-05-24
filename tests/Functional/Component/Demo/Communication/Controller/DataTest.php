<?php
# https://symfony.com/doc/current/testing.html#your-first-functional-test

namespace App\Tests\Functional\Component\Demo\Communication\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DataTest extends WebTestCase
{
    public function testDataPost()
    {
        $client = static::createClient();
        $client->request('GET', '/data');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertSame('application/json', $client->getResponse()->headers->get('content-type'));

        $jsonContent = json_decode($client->getResponse()->getContent());
        $this->assertSame('Welcome to your new controller!', $jsonContent->message);
    }
}