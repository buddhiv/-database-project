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
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ApplicationController extends Controller
{
    public function newApplicationAction()
    {
        $student = new Student();

        $new_student_application = $this->createFormBuilder($student)
            ->add('child id', IntegerType::class)
            ->add('name', TextType::class)
            ->add('name with initials', TextType::class)
            ->add('sex', IntegerType::class)
            ->add('religion', TextType::class)
            ->add('date of birth', DateType::class)
            ->getForm();

        return $this->render('ApplicationBundle:Parent:main.html.twig', array(
            'new_student_application' => $new_student_application->createView()
        ));
    }
}