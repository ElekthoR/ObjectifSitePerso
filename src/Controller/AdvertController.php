<?php
// src/Controller/AdvertController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class AdvertController
{
    public function index(Environment $twig)
    {
        $content = $twig->render('Advert/index.html.twig', ['name' => 'ElekthoR']);

        return new Response($content);
    }

    public function index2(Environment $twig)
    {
        $content = $twig->render('Advert/index2.html.twig', ['name' => 'ElekthoR']);

        return new Response($content);
    }
}