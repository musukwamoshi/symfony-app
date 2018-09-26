<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ArticleController extends AbstractController {
//note that for annotations use double quotes

/**
 * @Route("/")
 */
public function index(){

  //return new Response('Hello World');
  return $this->render('articles/index.html.twig');

}









}