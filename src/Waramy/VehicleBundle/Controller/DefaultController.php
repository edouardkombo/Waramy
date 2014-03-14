<?php

namespace Waramy\VehicleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('WaramyVehicleBundle:Default:index.html.twig', array('name' => $name));
    }
}
