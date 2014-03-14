<?php

namespace Waramy\EstimationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('WaramyEstimationBundle:Default:index.html.twig', array('name' => $name));
    }
}
