<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Catalogue;
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
 * Catalogue controller.
 *
 * @Route("admin/catalogue")
 */
class CatalogueController extends Controller
{
    /**
     * Lists all catalogue entities.
     *
     * @Route("/", name="admin_catalogue_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $catalogues = $em->getRepository('AppBundle:Catalogue')->findAll();

        return $this->render('catalogue/index.html.twig', array(
            'catalogues' => $catalogues,
        ));
    }

    /**
     * Creates a new catalogue entity.
     *
     * @Route("/new", name="admin_catalogue_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request, FileUploader $fileUploader)
    {
        $catalogue = new Catalogue();
        $form = $this->createForm('AppBundle\Form\CatalogueType', $catalogue);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $file = $catalogue->getImage()->getPathImage();
            $fileName = $fileUploader->upload($file);

            $catalogue->getImage()->setPathImage($fileName);

            $em = $this->getDoctrine()->getManager();
            $em->persist($catalogue);
            $em->flush();

            return $this->redirectToRoute('admin_catalogue_show', array('id' => $catalogue->getId()));
        }

        return $this->render('catalogue/new.html.twig', array(
            'catalogue' => $catalogue,
            'form' => $form->createView(),
        ));
    }

    

    /**
     * Displays a form to edit an existing catalogue entity.
     *
     * @Route("/{id}/edit", name="admin_catalogue_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Catalogue $catalogue)
    {
        $deleteForm = $this->createDeleteForm($catalogue);
        $editForm = $this->createForm('AppBundle\Form\CatalogueType2', $catalogue);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            

            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_catalogue_index', array('id' => $catalogue->getId()));
        }

        return $this->render('catalogue/edit.html.twig', array(
            'catalogue' => $catalogue,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a catalogue entity.
     *
     * @Route("/{id}", name="admin_catalogue_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Catalogue $catalogue)
    {
        $form = $this->createDeleteForm($catalogue);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($catalogue);
            $em->flush();
        }

        return $this->redirectToRoute('admin_catalogue_index');
    }

    /**
     * Creates a form to delete a catalogue entity.
     *
     * @param Catalogue $catalogue The catalogue entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Catalogue $catalogue)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_catalogue_delete', array('id' => $catalogue->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
