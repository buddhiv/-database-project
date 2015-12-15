<?php
/**
 * Created by PhpStorm.
 * User: Buddhi
 * Date: 12/3/2015
 * Time: 12:07 AM
 */

namespace Back\ApplicationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ApplicationController extends Controller
{
    public function newApplicationAction()
    {
        $new_student_application = $this->createFormBuilder()
            ->add('childId', 'text')
            ->add('nameInFull', 'text')
            ->add('nameWithInitials', 'text')
            ->add('religion', 'text')
            ->add('sex', 'choice', array(
                'choices' => array(
                    'male' => 'male',
                    'female' => 'female',
                ), 'choices_as_values' => true
            ))
            ->add('medium', 'choice', array(
                'choices' => array(
                    'sinhala' => 'sinhala',
                    'tamil' => 'tamil',
                    'english' => 'english',
                ), 'expanded' => true
            ))
            ->add('dateOfBirth', 'date', array(
                'input' => 'datetime',
                'widget' => 'choice',
                'years' => range(date("Y") - 10, date("Y")),
            ))
            ->add('chooseApplicationCategory', 'choice', array(
                'choices' => array(
                    'yes' => 0,
                    'no' => 1,
                    'no' => 2,
                    'no' => 3,
                ), 'choices_as_values' => true
            ))
            ->add('submit', 'submit')
            ->getForm();


        return $this->render('ApplicationBundle:Parent:main.html.twig', array(
            'new_student_application' => $new_student_application->createView()
        ));
    }
}