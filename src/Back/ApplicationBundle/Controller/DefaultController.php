<?php

namespace Back\ApplicationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ApplicationBundle:Parent:index.html.twig', array('name' => $name));
    }

    public function new_applicationAction(){
        return $this->render('ApplicationBundle:Parent:main.html.twig');
    }
}
