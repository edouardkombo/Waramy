<?php

namespace Waramy\ProblemBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('WaramyProblemBundle:Default:index.html.twig', array('name' => $name));
    }
}
