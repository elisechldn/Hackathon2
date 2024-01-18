<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('genre', ChoiceType::class, [
                'choices' => [
                    'Mme' => 'Mme',
                    'Mr' => 'Mr'
                ],
                'label' => false,
                'expanded' => true,
                'multiple' => false
                ])
            ->add('email', TextType::class, [
                'attr' => ['placeholder' => 'E-mail'],
                'label' => false
            ])
            ->add('firstname', TextType::class, [
                'attr' => ['placeholder' => 'Prénom'],
                'label' => false
            ])
            ->add('lastname', TextType::class, [
                'attr' => ['placeholder' => 'Nom'],
                'label' => false
            ])
            ->add('birthdate', DateType::class, [
                'label' => 'Date de naissance'
            ])

            ->add('adress', TextType::class, [
                'attr' => ['placeholder' => 'Adresse'],
                'label' => false
            ])
            ->add('city', TextType::class, [
                'attr' => ['placeholder' => 'Ville'],
                'label' => false
            ])
            ->add('postal_code', TextType::class, [
                'attr' => ['placeholder' => 'Code postal'],
                'label' => false
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'label' => 'Accepter les conditions',
                'constraints' => [
                    new IsTrue([
                        'message' => 'You should agree to our terms.',
                    ]),
                ],
            ])
            ->add('plainPassword', PasswordType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password', 'placeholder' => 'Mot de passe'],
                'label' => false,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a password',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
