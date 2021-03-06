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
        if($oldFile){
            $path=$this->getParameter('image_directory').'/'.$oldFile;
            $fs= new Filesystem();
            $fs->remove(array($path));
        }else{
            return $this->redirectToRoute('admin_image_index', array('id' => $image->getId()));
        }
        

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            
            $file = $image->getPathImage();
            if ($file){
                $fileName = $fileUploader->upload($file);
                $image->setPathImage($fileName);
                $this->getDoctrine()->getManager()->flush();
            }else{
                echo 'fichier vide'; dump($file);die;
            }
            

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
