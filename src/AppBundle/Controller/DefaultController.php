<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/skateschool", name="skateschool")
     */
    public function skateschoolAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $formules = $em->getRepository('AppBundle:Formule')->findAll();
        $tarifs = $em->getRepository('AppBundle:Tarif')->findAll();
        // replace this example code with whatever you need
        return $this->render('skateschool.html.twig',array(
            'formules' => $formules,
            'tarifs' =>$tarifs
        ));
    }

    /**
     * @Route("/message_envoye", name="message_envoye")
     */
    public function messageEnvoye(Request $requet)
    {
        return $this->render('message_envoye.html.twig');
    }

    /**
     * @Route("/video", name="video")
     */
    public function videoAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $videos = $em->getRepository('AppBundle:Video')->findAll();
        // replace this example code with whatever you need
        return $this->render('video.html.twig',array(
            'videos' => $videos,
        ));
    }

    
}
