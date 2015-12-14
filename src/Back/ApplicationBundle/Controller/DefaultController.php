<?php

namespace Back\ApplicationBundle\Controller;

use Back\ApplicationBundle\Entity\Student;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ApplicationBundle:Parent:index.html.twig', array('name' => $name));
    }
}
