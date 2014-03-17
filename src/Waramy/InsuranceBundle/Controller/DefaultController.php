<?php

namespace Waramy\InsuranceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('InsuranceBundle:Default:index.html.twig', array('name' => $name));
    }
}
