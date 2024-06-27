<?php

namespace App\Form;

use App\Entity\Planner;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PlannerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('time_to_eat', ChoiceType::class, [
                'attr' => ['class' => 'form-control mb-2'],
                'choices'  => [
                    'breakfast' => 1,
                    'lunch' => 2,
                    'dinner' => 3
                ],
            ])
            ->add('date', null, [
                'attr' => ['class' => 'form-control mb-2'],
                'widget' => 'single_text',
            ])
           
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Planner::class,
        ]);
    }
}
