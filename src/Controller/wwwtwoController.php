<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class wwwtwoController
{

	/**
     * @Route("/wwwtwo/diad")
     */
    public function diad(): Response
    {

        return new Response(
            'World War Two'
        );
    }



    /**
     * @Route("/wwwtwo/{slug}")
     */
    public function berlim($slug)
    {

    	return new Response ('Historia da guerra em Berlim') ;

    }


}