<?php

namespace Waramy\ContractBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ContractBundle:Default:index.html.twig', array('name' => $name));
    }
}
