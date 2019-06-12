<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use AppBundle\Entity\Formule;
use Symfony\component\Form\FormInterface;

class InscriptionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom')->add('prenom')->add('age')->add('tel')->add('valide')
        ->add('planche')->add('materiel')->add('forfait1h')
        ->add('forfait5h')->add('forfait10h')->add('forfaitAnnuel')
        ->add('formule', EntityType::class, [
                'class' => 'AppBundle:Formule',
                'required' => true,
                'placeholder' => 'Choisissez votre formule'
            ]);
        
        $formModifier = function (FormInterface $form, Formule $formule = null) {
            
            $sessions = null === $formule ? [] : $formule->getSessions();
            $form->add('sessionId', EntityType::class, [
                'class' => 'AppBundle:Session',
                'required' => true,
                'choices' => $sessions,
                'placeholder' => false,
            ]);
            
        };

        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent $event) use ($formModifier) {
                // this would be your entity, i.e. SportMeetup
                $data = $event->getData();
                $formModifier($event->getForm(), $data->getFormule());
            }
        );

        $builder->get('formule')->addEventListener(
            FormEvents::POST_SUBMIT,
            function (FormEvent $event) use ($formModifier) {
                // It's important here to fetch $event->getForm()->getData(), as
                // $event->getData() will get you the client data (that is, the ID)
                $formule = $event->getForm()->getData();

                // since we've added the listener to the child, we'll have to pass on
                // the parent to the callback functions!
                $formModifier($event->getForm()->getParent(), $formule);
            }
        );







        /**$builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent $event) {
                $form = $event->getForm();
                $data = $event->getData();
                $formule = $data->getFormule();
                $sessions = null === $formule ? [] : $formule->getSessions();
                $form->add('sessionId', EntityType::class,[
                    'class' => 'AppBundle:Session',
                    'choices' => $sessions,
                ]);
            }
        );**/
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Inscription'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_inscription';
    }


}
