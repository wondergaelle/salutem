<?php

namespace App\Form;

use App\Entity\Appointment;
use App\Entity\Skill;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AppointmentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', TextType::class, [
                'label' => 'Prénom',
                'attr' => ['placeholder' => 'Prénom']
            ])
            ->add('lastname', TextType::class, [
                'label'=>"Nom",
                'attr'=>['placeholder' => 'Nom']
        ])
            ->add('email', EmailType::class)
        ->add('phone', TelType::class)
        ->add('time', TimeType::class,[
            'widget'=>'single_text'
        ])
        ->add('date', DateType::class, [
            'widget'=>'single_text'
            ])
        ->add('message')
        ->add('skill', EntityType::class,[
            'class'=> Skill::class,
            'expanded'=>false,
            'multiple'=>false,
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Appointment::class,
        ]);
    }
}
