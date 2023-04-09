<?php

namespace App\Form;

use App\Entity\Article;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\UrlType;


class ArticleFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('title', TextType::class, [
            'attr' => array(
                'class'=>"fw-bold fs-3 text-center"
            )
        ])
        ->add('text', TextareaType::class, [
            'attr' => array(
                'class'=>"form-control mb-4 py-5",
                'rows' => 10,
                'style' => 'resize: vertical',
            )
        ])
        ->add('image', FileType::class, [
            'required' => false,
            'mapped' => false,
            'label' => 'Image (JPG, PNG, GIF)',
        ])
        ->add('save', SubmitType::class, [
            'label' => 'Save Article',
            'attr' => array(
                'class' => 'btn btn-primary'
            )
        ])
        ->add('back', SubmitType::class, [
            'label' => 'Back',
        ]);
           
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
            'back' => null,
        ]);
    }
}
