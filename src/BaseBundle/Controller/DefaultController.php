<?php

namespace BaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BaseBundle:Default:main.html.twig', array('name' => $name));
    }

    public function homeRedirectAction()
    {
        return $this->redirectToRoute('home');
    }

    public function homeAction()
    {
        return $this->render('BaseBundle:Default:home.html.twig');
    }

    public function aboutAction()
    {
        return $this->render('BaseBundle:Default:about.html.twig');
    }
}
