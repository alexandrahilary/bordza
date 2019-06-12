<?php
namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use AppBundle\Entity\Inscription;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FOSUserBundle\Entity\User;

/**
 * @Route("/user/inscription")
 */

class VisiteurInscriptionController extends Controller
{
    /**
     * @Route("/", name="inscription" )
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $inscription = new Inscription();
        $inscription->setUserId($this->getUser());
        $adresseMail = $inscription->getUserId()->getEmail();
        $form = $this->createForm('AppBundle\Form\InscriptionType', $inscription);
        if ($request->isMethod('POST')){
            $form->handleRequest($request);
        }
        

        if ($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($inscription);
            $em->flush();

            $message = \Swift_Message::newInstance()
                ->setContentType('text/html')
                ->setSubject('Nouvelle Inscription Bordza')
                ->setFrom('contact@bordza.fr')
                ->setTo('a.hilary@wanadoo.fr')
                ->setBody($this->renderView('inscription_mail.html.twig', array('inscription' => $inscription)),'text/html');

            $messageVisiteur = \Swift_Message::newInstance()
            
            ->setSubject('Nouvelle Inscription Bordza')
            ->setFrom('contact@bordza.fr')
            ->setTo($adresseMail)
            ->setBody($this->renderView('inscription_visiteur_mail.email.twig', array('inscription' => $inscription)),'text/html');


            $this->get('mailer')->send($messageVisiteur);
            $this->get('mailer')->send($message);

            return $this->redirectToRoute('fos_user_profile_show');
        }

        return $this->render('inscription.html.twig', array(
            
            'form' => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing inscription entity.
     *
     * @Route("/{id}/edit", name="inscription_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Inscription $inscription)
    {
        
        $adresseMail = $inscription->getUserId()->getEmail();
        $editForm = $this->createForm('AppBundle\Form\InscriptionType', $inscription);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $message = \Swift_Message::newInstance()
                ->setContentType('text/html')
                ->setSubject('Modification Inscription Bordza')
                ->setFrom('contact@bordza.fr')
                ->setTo('a.hilary@wanadoo.fr')
                ->setBody($this->renderView('modifier_inscription_mail.email.twig', array('inscription' => $inscription)),'text/html');

            $messageVisiteur = \Swift_Message::newInstance()
            
            ->setSubject('Inscription Bordza')
            ->setFrom('contact@bordza.fr')
            ->setTo($adresseMail)
            ->setBody($this->renderView('modifier_inscription_visiteur_mail.email.twig', array('inscription' => $inscription)),'text/html');


            $this->get('mailer')->send($messageVisiteur);
            $this->get('mailer')->send($message);

            return $this->redirectToRoute('fos_user_profile_show', array('id' => $inscription->getId()));
        }

        return $this->render('inscription_edit.html.twig', array(
            'inscription' => $inscription,
            'edit_form' => $editForm->createView(),
        ));
    }

    /**
     * Deletes a inscription entity.
     *
     * @Route("/{id}/delete", name="inscription_delete")
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

        return $this->redirectToRoute('fos_user_profile_show');
    }

    /**
     * Creates a form to delete a session entity.
     *
     * @param Session $session The session entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Inscription $inscription)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('inscription_delete', array('id' => $inscription->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}