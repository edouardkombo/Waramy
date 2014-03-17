<?php

namespace Waramy\MediasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MediasBundle:Default:index.html.twig', array('name' => $name));
    }
}
