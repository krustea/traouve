<?php

namespace App\Form;

use App\Entity\Traobject;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TraobjectType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, array('label'=>'Titre'))
            ->add('picture', FileType::class, array('label'=>'Image'))
            ->add('description', TextType::class, array('label'=>'Description'))
            ->add('eventAt', \Symfony\Component\Form\Extension\Core\Type\DateType::class, array('label'=>'Jour de l\'evenement'))
            ->add('dateEnd', \Symfony\Component\Form\Extension\Core\Type\DateType::class, array('label'=>'Date de fin'))
            ->add('city', TextType::class, array('label'=>'Ville'))
            ->add('address', TextType::class, array('label'=>'Adresse'))
            ->add('createdAt', \Symfony\Component\Form\Extension\Core\Type\DateType::class, array('label'=>'Date de creation'))
            ->add('updatedAt', \Symfony\Component\Form\Extension\Core\Type\DateType::class, array('label'=>'Date de Modification'))
            ->add('category', TextType::class, array('label'=>'Categorie'))
            ->add('county', TextType::class, array('label'=>'Departement'))
            ->add('state', ChoiceType::class, array('label'=>'Etat','choices'  => array(
                                                                                    'Trouve' => null,
                                                                                    'Perdu' => true,
                                                                                    'Rendu' => false,),))
            ->add('user', TextType::class, array('label'=>'Utilisateur'))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Traobject::class,
        ]);
    }
}
