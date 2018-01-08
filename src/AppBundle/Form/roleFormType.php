<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use AppBundle\Entity\User;
use AppBundle\Repository\UserRepository;





class roleFormType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {   

        $builder
         ->add('username', EntityType::class, [ 
        'label' => 'form.username', 'translation_domain' => 'FOSUserBundle',  
         'class' => User::class,
         'query_builder' => function(UserRepository $repo) {
            return $repo->podajUzytkownikow();
            }
           
        ])
        ->add('roles', ChoiceType::class, [
            //   'label' => 'form.choice.admin', 'translation_domain' => 'FOSUserBundle',
            //  'label' => 'form.choice.jakosc', 'translation_domain' => 'FOSUserBundle',
            'label' => 'form.roles', 'translation_domain' => 'FOSUserBundle',
           
            'choices' => [
        
                'Admin' => 'ROLE_ADMIN',
                'Jakosc' => 'ROLE_JAKOSC',
            ],
            'choice_label' => function ($value, $key, $index) 
                {
                return 'form.choice.'.$key;
                },
            'required' => true,
            'multiple' => true,
            'expanded' => true,
            'choice_translation_domain' => 'FOSUserBundle', 
            ]
        );

    }
    public function configureOptions(OptionsResolver $resolver)
    {

        $resolver->setDefaults([
            'data_class' => 'AppBundle\Entity\User'
        ]);


    }
}