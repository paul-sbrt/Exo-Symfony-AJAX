<?php

namespace App\Form;

use App\Entity\Coktail;
use App\Entity\Couleur;
use App\Entity\Fruit;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CoktailType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('couleurs', EntityType::class, [
                'class' => Couleur::class,
                'choice_label' => 'nom',
                'mapped'=> false,
                'placeholder' => 'Choisir une couleur'

            ])
            ->add('fruits', EntityType::class, [
                'class' => Fruit::class,
'choice_label' => 'nom',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Coktail::class,
        ]);
    }
}
