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

            $message = \Swift_Message::newInstance()
                ->setContentType('text/html')
                ->setSubject('Nouvelle Inscription Bordza')
                ->setFrom('contact@bordza.fr')
                ->setTo('a.hilary@wanadoo.fr')
                ->setBody($this->renderView('inscription_mail.html.twig', array('inscription' => $inscription)));

            $this->get('mailer')->send($message);

            return $this->redirectToRoute('fos_user_profile_show');
        }

        return $this->render('inscription.html.twig', array(
            
            'form' => $form->createView(),
        ));
    }
}