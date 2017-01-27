<?php

namespace JustBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $studentRepo = $this->getDoctrine()->getRepository('JustBundle:Student');
        return $this->render('student/unemethode.html.twig', [
            'students' => $studentRepo->uneMethode(),
        ]);
    }
}
