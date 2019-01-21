<?php
/**
 * Created by PhpStorm.
 * User: mickaeldebalme
 * Date: 2019-01-21
 * Time: 14:23
 */

namespace App\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class)
            ->add('content', TextType::class)
            ->add('author', TextType::class)
            ->add('submit', SubmitType::class);
    }

}
