<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname',TextType::class, array('label'=>'Prenom'))
            ->add('lastname',TextType::class, array('label'=>'Nom'))
            ->add('email',TextType::class)
            ->add('pictureFile', VichImageType::class, array('label'=>'Image', 'required'=> false))
            ->add('plainPassword', RepeatedType::class,[
                'type'=>PasswordType::class,
                'first_options'=> ['label'=> ' mot de passe'],
                'second_options'=> ['label'=> 'Repetez votre mot de passe']
            ])
            ->add('phone', TextType::class, array('label'=>'Telephone'))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
