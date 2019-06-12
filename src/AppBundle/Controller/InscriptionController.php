<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Inscription;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use FOS\UserBundle\Mailer;

/**
 * Inscription controller.
 *
 * @Route("admin/inscription")
 */
class InscriptionController extends Controller
{
    /**
     * Lists all inscription entities.
     *
     * @Route("/", name="admin_inscription_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('AppBundle:Inscription');
        $inscriptions = $repository->findAll();

        $deleteForms = array();

        krsort($inscriptions);

        foreach ($inscriptions as $inscription){
            $deleteForms[$inscription->getId()] = $this->createDeleteForm($inscription)->createView();
        }
        
        return $this->render('inscription/index.html.twig', array(
            'inscriptions' => $inscriptions,
            'deleteForms' => $deleteForms
            
            
            
        ));
    }

    /**
     * Creates a new inscription entity.
     *
     * @Route("/new", name="admin_inscription_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $inscription = new Inscription();
        
        $form = $this->createForm('AppBundle\Form\Inscription2Type', $inscription);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($inscription);
            $em->flush();

            $adresseMail = $inscription->getUserId()->getEmail();
            $messageVisiteur = \Swift_Message::newInstance()
            
            ->setSubject('Nouvelle Inscription Bordza')
            ->setFrom('contact@bordza.fr')
            ->setTo($adresseMail)
            ->setBody($this->renderView('inscription_visiteur_mail.email.twig', array('inscription' => $inscription)),'text/html');


            $this->get('mailer')->send($messageVisiteur);
            
            return $this->redirectToRoute('admin_inscription_index');
        }

        return $this->render('inscription/new.html.twig', array(
            'inscription' => $inscription,
            'form' => $form->createView(),
        ));
    }

    
    /**
     * Displays a form to edit an existing inscription entity.
     *
     * @Route("/{id}/edit", name="admin_inscription_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Inscription $inscription)
    {
        $deleteForm = $this->createDeleteForm($inscription);
        $adresseMail = $inscription->getUserId()->getEmail();
        $editForm = $this->createForm('AppBundle\Form\InscriptionType', $inscription);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $messageVisiteur = \Swift_Message::newInstance()
            
            ->setSubject('Inscription Bordza')
            ->setFrom('contact@bordza.fr')
            ->setTo($adresseMail)
            ->setBody($this->renderView('modifier_inscription_visiteur_mail.email.twig', array('inscription' => $inscription)),'text/html');


            $this->get('mailer')->send($messageVisiteur);

            return $this->redirectToRoute('admin_inscription_index', array('id' => $inscription->getId()));
        }

        return $this->render('inscription/edit.html.twig', array(
            'inscription' => $inscription,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a inscription entity.
     *
     * @Route("/{id}/delete", name="admin_inscription_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Inscription $inscription)
    {
        $form = $this->createDeleteForm($inscription);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($inscription);
            $em->flush();
        }

        return $this->redirectToRoute('admin_inscription_index');
    }

    /**
     * Creates a form to delete a inscription entity.
     *
     * @param Inscription $inscription The inscription entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Inscription $inscription)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_inscription_delete', array('id' => $inscription->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    
    
}
