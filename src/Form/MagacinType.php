<?php

namespace App\Form;

use App\Entity\Magacin;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class MagacinType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Naziv_proizvoda')
            ->add('Stopa_pdv', ChoiceType::class, [
                'choices' => [
                    '10%' => 10,
                    '20%' => 20
                ],
            ])
            ->add('Prodajna_Cena')
            ->add('Valuta', ChoiceType::class, [
                'choices' =>[
                    'RSD' =>'RSD',
                    'EUR' =>'EUR'
                    ]
            ])
            ->add('Opis',  TextareaType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Magacin::class,
        ]);
    }
}
