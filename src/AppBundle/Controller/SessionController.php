<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Session;
use AppBundle\Entity\Image;
use AppBundle\Form\ImageType;
use AppBundle\Form\SessionType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Filesystem\Filesystem;
use AppBundle\Service\FileUploader;

/**
 * Session controller.
 *
 * @Route("admin/session")
 */
class SessionController extends Controller
{
    /**
     * Lists all session entities.
     *
     * @Route("/", name="admin_session_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $sessions = $em->getRepository('AppBundle:Session')->findAll();
        $inscriptions = $em->getRepository('AppBundle:Inscription')->findAll();

        $deleteForms = array();

        krsort($sessions);
        

        foreach ($sessions as $session){
            $deleteForms[$session->getId()] = $this->createDeleteForm($session)->createView();
        }

        return $this->render('session/index.html.twig', [
            'sessions' => $sessions,
            'inscriptions' => $inscriptions,
            'deleteForms' => $deleteForms
        ]);
    }

    /**
     * Creates a new session entity.
     *
     * @Route("/new", name="admin_session_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request, FileUploader $fileUploader)
    {
        $session = new Session();
        $form = $this->createForm('AppBundle\Form\SessionType', $session);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $filePath = $session->getImage()->getPathImage();
            if ($filePath){
                $fileName = $fileUploader->upload($filePath);
                $session->getImage()->setPathImage($fileName);
            }else{
                $file = $session->getImage();
                $em->remove($file);
                $session->setImage(null);
            }
            $em->persist($session);
            $em->flush();

            return $this->redirectToRoute('admin_session_index');
        }

        return $this->render('session/new.html.twig', array(
            'session' => $session,
            'form' => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing session entity.
     *
     * @Route("/{id}/edit", name="admin_session_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Session $session)
    {
        $deleteForm = $this->createDeleteForm($session);
        $editForm = $this->createForm('AppBundle\Form\SessionType2', $session);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_session_index', array('id' => $session->getId()));
        }

        return $this->render('session/edit.html.twig', array(
            'session' => $session,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a session entity.
     *
     * @Route("/{id}/delete", name="admin_session_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Session $session)
    {
        $form = $this->createDeleteForm($session);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($session);
            $em->flush();
        }

        return $this->redirectToRoute('admin_session_index');
    }

    /**
     * Creates a form to delete a session entity.
     *
     * @param Session $session The session entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Session $session)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_session_delete', array('id' => $session->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
