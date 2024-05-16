<?php

namespace App\Form;

use App\Entity\AdvUser;
use App\Entity\AdvRole;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdvUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nom')
            ->add('Prénom')
            ->add('Mail')
            ->add('Téléphone')
            ->add('Mdp')
            ->add('advRole', EntityType::class, [
                'class' => advRole::class,
'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => AdvUser::class,
        ]);
    }
}
