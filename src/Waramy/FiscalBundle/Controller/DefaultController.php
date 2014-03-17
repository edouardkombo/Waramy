<?php

namespace Waramy\FiscalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('FiscalBundle:Default:index.html.twig', array('name' => $name));
    }
}
