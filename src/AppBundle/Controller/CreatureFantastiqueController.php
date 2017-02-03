<?php

namespace AppBundle\Controller;

use AppBundle\Entity\CreatureFantastique;
use AppBundle\Form\CreatureFantastiqueType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 *
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

        return $this->render('CreatureFantastique/index.html.twig', array(
            'creatureFantastiques' => $creatureFantastiques
        ));
    }

    /**
     * @Route("/show/{id}")
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     * @internal param CreatureFantastique $creatureFantastique
     */

    public function showAction($id)
    {
        $creatureFantastique = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository("AppBundle:CreatureFantastique")
            ->find($id);
        if(!$creatureFantastique) {
            return $this->redirectToRoute('app_creaturefantastique_index');
        }

        return $this->render('CreatureFantastique/show.html.twig', array(
            'creatureFantastique' => $creatureFantastique
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
            "AppBundle\Form\CreatureFantastiqueType",
            $creatureFantastique
            );
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($creatureFantastique);
            $em->flush();

            return $this->redirectToRoute("app_creaturefantastique_show", ['id' =>$creatureFantastique->getId()]) ;
        }
        $response = $this->render("CreatureFantastique/new.html.twig",
            [
                'creaturefantastique' => $creatureFantastique,
                'form' => $form->createView(),
            ]);
        //dump($response);die();
        return $response;
    }
}
