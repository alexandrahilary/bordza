<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Formule;
use AppBundle\Entity\Session;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


/**
 * Formule controller.
 *
 * @Route("admin/formule")
 */
class FormuleController extends Controller
{
    /**
     * Lists all formule entities.
     *
     * @Route("/", name="admin/formule_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $formules = $em->getRepository('AppBundle:Formule')->findAll();

        $deleteForms = array();

        foreach ($formules as $formule){
            $deleteForms[$formule->getId()] = $this->createDeleteForm($formule)->createView();
        }
        return $this->render('formule/index.html.twig', array(
            'formules' => $formules,
            'deleteForms' => $deleteForms,
        ));
    }

    /**
     * Creates a new formule entity.
     *
     * @Route("/new", name="admin/formule_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $formule = new Formule();
        $form = $this->createForm('AppBundle\Form\FormuleType', $formule);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($formule);
            $em->flush();

            return $this->redirectToRoute('admin/formule_show', array('id' => $formule->getId()));
        }

        return $this->render('formule/new.html.twig', array(
            'formule' => $formule,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a formule entity.
     *
     * @Route("/{id}", name="admin/formule_show")
     * @Method("GET")
     */
    public function showAction(Formule $formule)
    {
        $deleteForm = $this->createDeleteForm($formule);

        return $this->render('formule/show.html.twig', array(
            'formule' => $formule,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing formule entity.
     *
     * @Route("/{id}/edit", name="admin/formule_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Formule $formule)
    {
        $deleteForm = $this->createDeleteForm($formule);
        $editForm = $this->createForm('AppBundle\Form\FormuleType', $formule);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin/formule_edit', array('id' => $formule->getId()));
        }

        return $this->render('formule/edit.html.twig', array(
            'formule' => $formule,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a formule entity.
     *
     * @Route("/{id}/delete", name="admin/formule_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Formule $formule)
    {
        $form = $this->createDeleteForm($formule);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($formule);
            $em->flush();
        }

        return $this->redirectToRoute('admin/formule_index');
    }

    /**
     * Creates a form to delete a formule entity.
     *
     * @param Formule $formule The formule entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Formule $formule)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin/formule_delete', array('id' => $formule->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
