<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
// use Symfony\Component\Form\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;


class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('firstname')
                ->add('lastname')
                ->add('email', EmailType::class)
                ->add('country', CountryType::class)
                ->add('subject', ChoiceType::class, [
                    'choices' => [
                        'Demande de devis pour un projet Application Web' => 0,
                        'Demande de devis pour un projet Application 2D-3D' => 1 ,
                        'Demande de devis pour autre projets' => 2,
                        'Autres demandes' => 3
                    ]
                ])
                ->add('message', TextareaType::class)
                ->add('send', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
