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
            'mongodb+srv://<username>:<password>@<hostname>/test?retryWrites=true&w=majority'
        );
        
        $db = $client->test;

        return new Response(
            '<html><body>Lucky number: '.$db.'</body></html>'
        );
    }
}
