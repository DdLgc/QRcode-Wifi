<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class WifiParamsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('networkName', TextType::class)
            ->add('encryption', ChoiceType::class, [
                'choices' => [
                    'WPA2' => 'WPA2',
                    'WPA' => 'WPA',
                    'WEP' => 'WEP',
                ],
                'help' => 'The type of security protocol on your network.',
            ])
            ->add('password', TextType::class)
            ->add('isHidden', CheckboxType::class, [
                'label' => 'Hidden Wifi Network',
                'required' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
