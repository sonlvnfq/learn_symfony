<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @author Son Le <son.le@nfq.asia>
 */

 class HomeController extends AbstractController
 {
     /**
      * @Route("/", name="front.home")
      */
     public function index()
     {
         return $this->render('front/home.html.twig');
     }
 }
