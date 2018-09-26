<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class ArticleController {
//note that for annotations use double quotes

/**
 * @Route("/")
 */
public function index(){

  return new Response('Hello World');

}









}