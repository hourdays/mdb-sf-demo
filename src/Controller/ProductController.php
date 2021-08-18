<?php

// src/App/Controller/ProductController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Document\Product;
use Doctrine\ODM\MongoDB\DocumentManager as DocumentManager;
use Symfony\Component\HttpFoundation\Response;
use Faker;

class ProductController extends AbstractController
{
    public function createAction(DocumentManager $dm)
    {
        $product = new Product();

        $faker = Faker\Factory::create();
        
        $lorem = $faker->text();
        $arr = explode(" ", $lorem);
        $pname = $arr[0].' '.$arr[1].' '.$arr[2];

        $product->setName($pname);

        $product->setPrice(rand(12, 57) / 10);

        $dm->persist($product);
        $dm->flush();

        return new Response('Created product id ' . $product->getId());
    }

    public function showAction(DocumentManager $dm, $id)
    {
        $product = $dm->getRepository(Product::class)->find($id);

        if (! $product) {
            throw $this->createNotFoundException('No product found for id ' . $id);
        }
        
        return new Response(var_dump($product));

        // do something, like pass the $product object into a template
    }
}
