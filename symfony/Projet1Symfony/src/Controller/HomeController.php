<?php

use Symfony\Component\HttpFoundation\Response;

class HomeController extends abstractController{
    #[route ('/exemple/bonjour')]
    public function bonjour(){
        return new Response();

    }
}