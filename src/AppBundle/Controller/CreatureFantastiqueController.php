<?php

namespace AppBundle\Controller;

use AppBundle\Entity\CreatureFantastique;
use Doctrine\ORM\Cache\Persister\Entity\ReadOnlyCachedEntityPersister;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class CreatureFantastiqueController
 * @package AppBundle\Controller
 * @Route("/creaturefantastique")
 */

class CreatureFantastiqueController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $creatureFantastiques = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository("AppBundle:CreatureFantastique")
            ->findAll();

        return $this->render('AppBundle:CreatureFantastiques/index.html.twig', array(
            'creatureFantastiques' => $creatureFantastiques
        ));
    }

    /**
     * @Route("/show/{id}")
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     * @internal param CreatureFantastique $creatureFantastique
     */

    public function showAction()
    {
        $creatureFantastiques = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository("AppBundle:CreatureFantastique")
            ->findAll();

        return $this->render('AppBundle:CreatureFantastiques/show.html.twig', array(
            'creatureFantastiques' => $creatureFantastiques
        ));
    }

    /**
     * @param Request $request
     * @Route("/new")
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function newAction(Request $request)
    {
        $creatureFantastique = new CreatureFantastique();
        $form = $this-> createForm(
            "Appbundle/Form/CreatureFantastiqueType",
            $creatureFantastique
            );
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            dump($form);die();
        }
        $response = $this->render("CreatureFantastique/new.html.twig",
            [
                'creaturefantastique' => $creatureFantastique,
                'form' => $form->createView(),
            ]);
        dump($response);die();
        return $response;
    }
}
