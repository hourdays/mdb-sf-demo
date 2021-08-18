<?php

// src/Controller/atlasTest.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class atlasTest
{
    public function test(): Response
    {
        //$number = random_int(0, 100);

        $client = new MongoDB\Client(
            'mongodb+srv://symfony:asYBeQRSQitfi0yR@demo.130he.mongodb.net/test?retryWrites=true&w=majority'
        );
        
        $db = $client->test;

        return new Response(
            '<html><body>Lucky number: '.$db.'</body></html>'
        );
    }
}
