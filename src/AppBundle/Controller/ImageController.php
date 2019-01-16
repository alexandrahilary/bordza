<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Image;
use AppBundle\Form\ImageType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Filesystem\Filesystem;
use AppBundle\Service\FileUploader;
use Symfony\Component\HttpFoundation\File\File;

/**
 * Image controller.
 *
 * @Route("admin/image")
 */
class ImageController extends Controller
{
    /**
     * Lists all image entities.
     *
     * @Route("/", name="admin_image_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $images = $em->getRepository('AppBundle:Image')->findAll();

        return $this->render('image/index.html.twig', array(
            'images' => $images,
        ));
    }

    /**
     * Creates a new image entity.
     *
     * @Route("/new", name="admin_image_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request, FileUploader $fileUploader)
    {
        $image = new Image();
        $form = $this->createForm('AppBundle\Form\ImageType', $image);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $image->getPathImage();
            $fileName = $fileUploader->upload($file);

            $image->setPathImage($fileName);
           

            $em = $this->getDoctrine()->getManager();
            $em->persist($image);
            $em->flush();

            return $this->render('image/show.html.twig',array('image'=>$image));
        }

        return $this->render('image/new.html.twig', array(
            'image' => $image,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a image entity.
     *
     * @Route("/{id}", name="admin_image_show")
     * @Method("GET")
     */
    public function showAction(Image $image)
    {
        $deleteForm = $this->createDeleteForm($image);

        return $this->render('image/show.html.twig', array(
            'image' => $image,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing image entity.
     *
     * @Route("/{id}/edit", name="admin_image_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Image $image)
    {
        $deleteForm = $this->createDeleteForm($image);
        $editForm = $this->createForm('AppBundle\Form\ImageType2', $image);
        $editForm->handleRequest($request);
        

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_image_index', array('id' => $image->getId()));
        }

        return $this->render('image/edit.html.twig', array(
            'image' => $image,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing image entity.
     *
     * @Route("/{id}/edit_image", name="admin_image_edit_image")
     * @Method({"GET", "POST"})
     */
    public function editImageAction(Request $request, Image $image, FileUploader $fileUploader)
    {
        $deleteForm = $this->createDeleteForm($image);
        $editForm = $this->createForm('AppBundle\Form\ImageType', $image);
        $editForm->handleRequest($request);
        $oldFile = $image->getPathImage();
        $path=$this->getParameter('image_directory').'/'.$oldFile;
            $fs= new Filesystem();
            $fs->remove(array($path));

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            
            $file = $image->getPathImage();
            $fileName = $fileUploader->upload($file);
            $image->setPathImage($fileName);
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_image_index', array('id' => $image->getId()));
        }

        return $this->render('image/edit_image.html.twig', array(
            'image' => $image,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a image entity.
     *
     * @Route("/{id}/delete", name="admin_image_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Image $image)
    {
        $image=$this->getDoctrine()->getRepository('AppBundle:Image')->find($image);
        $file=$image->getPathImage();
        $path=$this->getParameter('image_directory').'/'.$file;
            //unlink(''.$path);
            $fs= new Filesystem();
            $fs->remove(array($path));
            $em=$this->getDoctrine()->getManager();
            $em->remove($image);
            $em->flush();

            return $this->redirectToRoute('admin_image_index');
    }
    private function createDeleteForm(Image $image)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_image_delete', array('id' => $image->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
