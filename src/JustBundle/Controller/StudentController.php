<?php

namespace JustBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class StudentController extends Controller
{
    /**
     * Student Controller
     *
     * @Route("student")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $data = $em->getRepository('JustBundle:Student')->displayAge();
        dump($data);

        return $this->render('student/index.html.twig', array(
            // ...
        ));
    }

}
