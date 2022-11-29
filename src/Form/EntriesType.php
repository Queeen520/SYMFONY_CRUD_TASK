<?php

// src/Form/EntriesType.php
namespace App\Form;

use App\Entity\Entries;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EntriesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, ["attr" => ["placeholder" => "please type the todo name", "class" => "form-control mb-2"]])
            ->add('bloggerName', TextType::class, ["attr" => ["placeholder" => "Enter your Name", "class" => "form-control mb-2"]])
            ->add('destination', TextType::class, ["attr" => ["placeholder" => "Destination", "class" => "form-control mb-2"]])
            ->add('story', TextareaType::class, ["attr" => ["placeholder" => "Write your story here", "class" => "form-control mb-2"]])
            ->add('visitDate', DateType::class, ["attr" => ["class" => "form-control mb-2"]])
            ->add('entryDate', DateType::class, ["attr" => ["class" => "form-control mb-2"]])

            ->add('Create Blog Post', SubmitType::class, ["attr" => ["class" => "btn btn-primary"]]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Entries::class
        ]);
    }
}
