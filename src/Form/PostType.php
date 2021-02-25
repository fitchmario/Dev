<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\DateTime;

class PostType extends AbstractType
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
            ->add('age', BirthdayType::class, [
                'label' => 'Datum rođenja',
                'placeholder' => [
                    'year' => 'godina', 'month' => 'Month', 'day' => 'Day',
                ]
            ])
            ->add('city', TextType::class, [
                'label' => 'Grad'
            ])
            ->add('status', TextType::class, [
                'label' => 'Status'
            ])
            ->add('height', IntegerType::class, [
                'label' => 'Visina'
            ])
            ->add('weight', IntegerType::class, [
                'label' => 'Težina'
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
