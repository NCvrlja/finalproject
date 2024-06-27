<?php

namespace App\Form;

use App\Entity\Meals;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Component\Validator\Constraints\File;

class MealsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('mealName', null, [
                'attr' => ['class' => 'form-control mb-2',
                'placeholder' => 'Name of your meal']
            ])
            ->add('ingredients', null, [
                'attr' => ['class' => 'form-control mb-2', 'placeholder' => 'Please write your ingredients with comma ,']
            ])
            ->add('recipe', null, [
                'attr' => ['class' => 'form-control mb-2', 'placeholder' => 'Recipe of the meal']
                ])
            ->add('preparationTime', null, [
                'attr' => ['class' => 'form-control mb-2', 'placeholder' => 'Minutes/hours']
                ])
            ->add('calories', null, [
                'attr' => ['class' => 'form-control mb-2', 'placeholder' => 'How much calories does your meal have?']
                ])
            ->add('mealType', ChoiceType::class, [
                'attr' => ['class' => 'form-control mb-2'],
                'choices'  => [
                    'vegan' => 'vegan',
                    'vegeterian' => 'vegeterian',
                    'meat' => 'meat',
                    'fish' => 'fish'
                ],
            ])
            ->add('link', null, [
                'attr' => ['class' => 'form-control mb-2', 'placeholder' => 'Add a link from another website (optional)']
                ])
            ->add('nutriensTable', null, [
                'attr' => ['class' => 'form-control mb-2', 'placeholder' => 'Fat/Carb/Protein (optional)']
                ])
            ->add('imageFile', VichImageType::class, [
                'allow_delete' => false,
                'delete_label' => '',
            'download_label' => '',
                'attr' => ['class' => 'form-control mb-3'],
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',  // Maximum file size allowed (in this case, 1024 KB)
                        'mimeTypes' => [
                            'image/jpeg',        // Allowed MIME types for images (JPEG)
                            'image/png',         // Allowed MIME types for images (PNG)
                        ],
                        'mimeTypesMessage' => 'Please upload a valid image (JPEG or PNG)',  // Error message for invalid MIME types
                    ])
                ],
                'required' => false,  // Whether the field is required or not
            ]);
            
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Meals::class,
        ]);
    }
}
