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
        $form = $this->createForm('AppBundle\Form\InscriptionType', $inscription);
        if ($request->isMethod('POST')){
            $form->handleRequest($request);
        }
        

        if ($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($inscription);
            $em->flush();

            return $this->redirectToRoute('fos_user_profile_show');
        }

        return $this->render('inscription.html.twig', array(
            
            'form' => $form->createView(),
        ));
    }
}