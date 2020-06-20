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
      * @Route("/", name="front.home", methods="GET")
      */
     public function index()
     {
         return $this->render('front/home.html.twig');
     }

     /**
      * @Route("/product/{product}", name="front.product.detail")
      */
     public function detail()
     {
         return $this->render('front/product-detail.html.twig', ['name' => 'Fruit']);
     }
 }
