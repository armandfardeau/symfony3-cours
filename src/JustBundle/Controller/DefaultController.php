<?php

namespace JustBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('JustBundle:Default:index.html.twig');
    }
}
