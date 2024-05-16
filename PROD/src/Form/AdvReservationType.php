<?php

namespace App\Form;

use App\Entity\AdvReservation;
use App\Entity\AdvUser;
use App\Entity\AdvVoyage;
use App\Entity\AdvStatut;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdvReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Message')
            ->add('advVoyage', EntityType::class, [
                'class' => AdvVoyage::class,
'choice_label' => 'id',
            ])
            ->add('advUser', EntityType::class, [
                'class' => AdvUser::class,
'choice_label' => 'id',
            ])
            ->add('advStatut', EntityType::class, [
                'class' => advStatut::class,
'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => AdvReservation::class,
        ]);
    }
}
