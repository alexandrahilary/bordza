<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Actu;
use AppBundle\Form\ActuType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Image;
use AppBundle\Form\ImageType;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Filesystem\Filesystem;
use AppBundle\Service\FileUploader;
use Symfony\Component\HttpFoundation\File\File;

/**
 * Actu controller.
 *
 * @Route("admin/actu")
 */
class ActuController extends Controller
{
    /**
     * Lists all actu entities.
     *
     * @Route("/", name="admin_actu_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $actus = $em->getRepository('AppBundle:Actu')->findAll();

        $deleteForms = array();

        krsort($actus);
        foreach ($actus as $actu){
            $deleteForms[$actu->getId()] = $this->createDeleteForm($actu)->createView();
        }

        return $this->render('actu/index.html.twig', array(
            'actus' => $actus,
            'deleteForms' => $deleteForms,
        ));
    }

    /**
     * Creates a new actu entity.
     *
     * @Route("/new", name="admin_actu_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request, FileUploader $fileUploader)
    {
        $actu = new Actu();
        $form = $this->createForm('AppBundle\Form\ActuType', $actu);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $file = $actu->getImageId()->getPathImage();
            $fileName = $fileUploader->upload($file);

            $actu->getImageId()->setPathImage($fileName);

            $em = $this->getDoctrine()->getManager();
            $em->persist($actu);
            $em->flush();

            return $this->redirectToRoute('admin_actu_index');
        }

        return $this->render('actu/new.html.twig', array(
            'actu' => $actu,
            'form' => $form->createView(),
        ));
    }

    
    /**
     * Displays a form to edit an existing actu entity.
     *
     * @Route("/{id}/edit", name="admin_actu_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Actu $actu)
    {
        $deleteForm = $this->createDeleteForm($actu);
        $editForm = $this->createForm('AppBundle\Form\ActuType2', $actu);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {

            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_actu_index', array('id' => $actu->getId()));
        }

        return $this->render('actu/edit.html.twig', array(
            'actu' => $actu,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a actu entity.
     *
     * @Route("/{id}/delete", name="admin_actu_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Actu $actu)
    {
        $form = $this->createDeleteForm($actu);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($actu);
            $em->flush();
        }

        return $this->redirectToRoute('admin_actu_index');
    }

    /**
     * Creates a form to delete a actu entity.
     *
     * @param Actu $actu The actu entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Actu $actu)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_actu_delete', array('id' => $actu->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
