<?php

namespace Waramy\GarageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('WaramyGarageBundle:Default:index.html.twig', array('name' => $name));
    }
}
