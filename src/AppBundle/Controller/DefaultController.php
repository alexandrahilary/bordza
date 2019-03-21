<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Contact;
use AppBundle\Entity\Actu;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/skateschool", name="skateschool")
     */
    public function skateschoolAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $sessions = $em->getRepository('AppBundle:Session')->findAll();
        $tarifs = $em->getRepository('AppBundle:Tarif')->findAll();
        
        krsort($sessions);

        return $this->render('skateschool.html.twig',array(
            'sessions' => $sessions,
            'tarifs' =>$tarifs
        ));
    }

    /**
     * @Route("/actu", name="actu")
     */
    public function actuAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $actus = $em->getRepository('AppBundle:Actu')->findAll();
        

        $deleteForms = array();
        foreach ($actus as $actu){
            $deleteForms[$actu->getId()] = $this->createActuDeleteForm($actu)->createView();
        }
        
        // replace this example code with whatever you need
        return $this->render('news.html.twig',array(
            'actus' => $actus,
            'deleteForms' => $deleteForms,
        ));
    }

    /**
     * Finds and displays a actu entity.
     *
     * @Route("/actu/{id}", name="actu_show")
     * @Method("GET")
     */
    public function showActuAction(Actu $actu)
    {


        return $this->render('news_show.html.twig', array(
            'actu' => $actu,
            
        ));
    }

    /**
     * Creates a form to delete a actu entity.
     *
     * @param Actu $actu The actu entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createActuDeleteForm($actu)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_actu_delete', array('id' => $actu->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    /**
     * @Route("/catalogue", name="catalogue")
     */
    public function catalogueAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $catalogues = $em->getRepository('AppBundle:Catalogue')->findAll();
        
        // replace this example code with whatever you need
        return $this->render('catalogue.html.twig',array(
            'catalogues' => $catalogues,
        ));
    }

     /**
     * @Route("/serigraphie", name="serigraphie" )
     * @Method({"GET", "POST"})
     */
    public function serigraphieAction(Request $request)
    {
        $contact = new Contact();
        $form = $this->createForm('AppBundle\Form\ContactType3', $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $filePath = $contact->getImage()->getPathImage();
            if ($filePath){
                $fileName = $fileUploader->upload($filePath);
                $contact->getImage()->setPathImage($fileName);
            }else{
                $file = $contact->getImage();
                $em->remove($file);
                $contact->setImage(null);
            }
            $em->persist($contact);
            $em->flush();

            return $this->redirectToRoute('message_envoye', array('id' => $contact->getId()));
        }

        return $this->render('serigraphie.html.twig', array(
            'contact' => $contact,
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/contact", name="contact" )
     * @Method({"GET", "POST"})
     */
    public function contactAction(Request $request)
    {
        $contact = new Contact();
        $form = $this->createForm('AppBundle\Form\ContactType3', $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $filePath = $contact->getImage()->getPathImage();
            if ($filePath){
                $fileName = $fileUploader->upload($filePath);
                $contact->getImage()->setPathImage($fileName);
            }else{
                $file = $contact->getImage();
                $em->remove($file);
                $contact->setImage(null);
            }
            $em->persist($contact);
            $em->flush();

            $message = \Swift_Message::newInstance()
                ->setContentType('text/html')
                ->setSubject('Nouveau message Bordza')
                ->setFrom('contact@bordza.fr')
                ->setTo('bordza@hotmail.fr')
                ->setBody($this->renderView('contact_mail.html.twig', array('contact' => $contact)));

            $this->get('mailer')->send($message);

            return $this->redirectToRoute('message_envoye', array('id' => $contact->getId()));
        }

        return $this->render('contact.html.twig', array(
            'contact' => $contact,
            'form' => $form->createView(),
        ));
    }


    /**
     * @Route("/message_envoye", name="message_envoye")
     */
    public function messageEnvoye(Request $requet)
    {
        return $this->render('message_envoye.html.twig');
    }

    /**
     * @Route("/video", name="video")
     */
    public function videoAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $videos = $em->getRepository('AppBundle:Video')->findAll();
        // replace this example code with whatever you need
        return $this->render('video.html.twig',array(
            'videos' => $videos,
        ));
    }

    /**
     * @Route("/concept", name="concept")
     */
    public function conceptAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('concept.html.twig');
    }

    /**
     * @Route("/cgv", name="cgv")
     */
    public function cgvAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('cgv.html.twig');
    }

    
}
