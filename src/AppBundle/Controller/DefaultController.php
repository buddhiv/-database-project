<?php

namespace AppBundle\Controller;

use Back\ApplicationBundle\Entity\Student;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/main.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }

    /**
     * @Route("/student_form", name="studentform")
     */
    public function formAction(Request $request){
        $student = new Student();

        $student_form = $this->createFormBuilder()
            ->add('name', 'text')
            ->add('save', 'submit')
            ->getForm();

        $student_form->handleRequest($request);

        if($student_form->isSubmitted()){




            return $this->render('AppBundle:Default:success.html.twig');
        }

        return $this->render('AppBundle:Default:form_student.html.twig', array(
            'student_form' => $student_form->createView()
        ));
    }
}
