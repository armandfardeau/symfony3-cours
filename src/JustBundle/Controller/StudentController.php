<?php

namespace JustBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class StudentController extends Controller
{
    /**
     * Student Controller
     *
     * @Route("/index")
     */
    public function indexAction()
    {
        $service = $this->get('just.services.time_is_on_my_side');
        $em = $this->getDoctrine()->getEntityManager();
        $students = $em->getRepository('JustBundle:Student')->displayAge();

        $ages = [];

        foreach ($students as $student) {
            $age = $service->getAge($student->getDateOfBirth());
            array_push($ages,$age);
        }

        return $this->render('student/index.html.twig', array(
            'students' => $students,
            'ages' => $ages,
        ));
    }

}
