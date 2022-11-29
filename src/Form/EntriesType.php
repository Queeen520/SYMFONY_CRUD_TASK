<?php

// src/Form/EntriesType.php
namespace App\Form;

use App\Entity\Entries;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
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
            ->add('bloggerName', TextType::class)
            ->add('destination', TextareaType::class)
            ->add('story', TextType::class)
            ->add('visitDate', DateType::class)
            ->add('entryDate', DateType::class)

            ->add('Create Entry', SubmitType::class);
    }
}
