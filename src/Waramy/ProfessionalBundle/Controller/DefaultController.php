<?php

namespace Waramy\ProfessionalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ProfessionalBundle:Default:index.html.twig', array('name' => $name));
    }
}
