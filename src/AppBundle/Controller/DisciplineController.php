<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Discipline;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Discipline controller.
 *
 * @Route("admin/discipline")
 */
class DisciplineController extends Controller
{
    /**
     * Lists all discipline entities.
     *
     * @Route("/", name="admin_discipline_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $disciplines = $em->getRepository('AppBundle:Discipline')->findAll();
        $deleteForms = array();

        foreach ($disciplines as $discipline){
            $deleteForms[$discipline->getId()] = $this->createDeleteForm($discipline)->createView();
        }

        return $this->render('discipline/index.html.twig', array(
            'disciplines' => $disciplines,
            'deleteForms' => $deleteForms
        ));
    }

    /**
     * Creates a new discipline entity.
     *
     * @Route("/new", name="admin_discipline_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $discipline = new Discipline();
        $form = $this->createForm('AppBundle\Form\DisciplineType', $discipline);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($discipline);
            $em->flush();

            return $this->redirectToRoute('admin_discipline_show', array('id' => $discipline->getId()));
        }

        return $this->render('discipline/new.html.twig', array(
            'discipline' => $discipline,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a discipline entity.
     *
     * @Route("/{id}", name="admin_discipline_show")
     * @Method("GET")
     */
    public function showAction(Discipline $discipline)
    {
        $deleteForm = $this->createDeleteForm($discipline);

        return $this->render('discipline/show.html.twig', array(
            'discipline' => $discipline,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing discipline entity.
     *
     * @Route("/{id}/edit", name="admin_discipline_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Discipline $discipline)
    {
        $deleteForm = $this->createDeleteForm($discipline);
        $editForm = $this->createForm('AppBundle\Form\DisciplineType', $discipline);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_discipline_edit', array('id' => $discipline->getId()));
        }

        return $this->render('discipline/edit.html.twig', array(
            'discipline' => $discipline,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a discipline entity.
     *
     * @Route("/{id}/delete", name="admin_discipline_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Discipline $discipline)
    {
        $form = $this->createDeleteForm($discipline);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($discipline);
            $em->flush();
        }

        return $this->redirectToRoute('admin_discipline_index');
    }

    /**
     * Creates a form to delete a discipline entity.
     *
     * @param Discipline $discipline The discipline entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Discipline $discipline)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_discipline_delete', array('id' => $discipline->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
