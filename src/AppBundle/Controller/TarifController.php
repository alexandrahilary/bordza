<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Tarif;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Tarif controller.
 *
 * @Route("admin/tarif")
 */
class TarifController extends Controller
{
    /**
     * Lists all tarif entities.
     *
     * @Route("/", name="admin_tarif_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tarifs = $em->getRepository('AppBundle:Tarif')->findAll();

        return $this->render('tarif/index.html.twig', array(
            'tarifs' => $tarifs,
        ));
    }

    /**
     * Displays a form to edit an existing tarif entity.
     *
     * @Route("/{id}/edit", name="admin_tarif_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Tarif $tarif)
    {
        $deleteForm = $this->createDeleteForm($tarif);
        $editForm = $this->createForm('AppBundle\Form\TarifType', $tarif);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_tarif_edit', array('id' => $tarif->getId()));
        }

        return $this->render('tarif/edit.html.twig', array(
            'tarif' => $tarif,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a tarif entity.
     *
     * @Route("/{id}/delete", name="admin_tarif_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Tarif $tarif)
    {
        $form = $this->createDeleteForm($tarif);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tarif);
            $em->flush();
        }

        return $this->redirectToRoute('admin_tarif_index');
    }

    /**
     * Creates a form to delete a tarif entity.
     *
     * @param Tarif $tarif The tarif entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tarif $tarif)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_tarif_delete', array('id' => $tarif->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}