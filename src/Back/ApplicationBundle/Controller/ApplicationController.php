<?php
/**
 * Created by PhpStorm.
 * User: Buddhi
 * Date: 12/3/2015
 * Time: 12:07 AM
 */

namespace Back\ApplicationBundle\Controller;

use Back\ApplicationBundle\Entity\Student;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ApplicationController extends Controller
{
    public function newApplicationAction()
    {
        $student = new Student();

        $new_student_aaplication = $this->createFormBuilder($student)->add()->getForm();

        return $this->render('ApplicationBundle:Parent:main.html.twig', array(
            'new_student_application' => $new_student_aaplication->createView()
        ));

//        return $this->render('ApplicationBundle:Parent:main.html.twig');
    }
}