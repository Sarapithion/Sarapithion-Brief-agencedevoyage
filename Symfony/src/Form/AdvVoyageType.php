<?php

namespace App\Form;

use App\Entity\AdvCategorie;
use App\Entity\AdvPays;
use App\Entity\AdvVoyage;
use App\Entity\advUser;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdvVoyageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Durée')
            ->add('Date_départ', null, [
                'widget' => 'single_text'
            ])
            ->add('Date_fin', null, [
                'widget' => 'single_text'
            ])
            ->add('Url_image')
            ->add('Résumé')
            ->add('Nombre_pers_min')
            ->add('Nombre_pers_max')
            ->add('Prix')
            ->add('AdvPays', EntityType::class, [
                'class' => AdvPays::class,
'choice_label' => 'id',
'multiple' => true,
            ])
            ->add('advCategorie', EntityType::class, [
                'class' => AdvCategorie::class,
'choice_label' => 'id',
'multiple' => true,
            ])
            ->add('advUser', EntityType::class, [
                'class' => advUser::class,
'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => AdvVoyage::class,
        ]);
    }
}