<?php

namespace Waramy\AccountingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('WaramyAccountingBundle:Default:index.html.twig', array('name' => $name));
    }
}
