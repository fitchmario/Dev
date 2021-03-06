<?php

namespace App\Form;

use App\Entity\Country;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName', TextType::class, [
                'label' => 'Ime'
            ])
            ->add('lastName', TextType::class, [
                'label' => 'Prezime'
            ])
            ->add('birthDate', BirthdayType::class, [
                'label' => 'Datum rođenja',
                'placeholder' => [
                    'year' => 'Godina', 'month' => 'Mjesec', 'day' => 'Dan',
                ]
            ])
            ->add('sex', ChoiceType::class, [
                'label' => 'Spol',
                'choices'  => ['Muško' => true,
                    'Žensko' => false
                ]
            ])
            ->add('country', EntityType::class, [
                'label' => 'Država',
                'class' => Country::class
            ])
            ->add('email', EmailType::class, [
                'label' => 'Adresa e-pošte'
            ])
            ->add('password', PasswordType::class, [
                'label' => 'Lozinka'
            ])
            ->add('Spremi', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
