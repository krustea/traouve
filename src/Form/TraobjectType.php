<?php

namespace App\Form;

use App\Entity\Traobject;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;

class TraobjectType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, array('label'=>'Titre'))
            ->add('pictureFile', VichImageType::class, array('label'=>'Image', 'required'=> false))
            ->add('description', TextType::class, array('label'=>'Description'))
            ->add('eventAt', \Symfony\Component\Form\Extension\Core\Type\DateType::class, array('label'=>'Jour de l\'evenement'))
            //->add('dateEnd', \Symfony\Component\Form\Extension\Core\Type\DateType::class, array('label'=>'Date de fin'))
            ->add('city', TextType::class, array('label'=>'Ville'))
            ->add('address', TextType::class, array('label'=>'Adresse'))
            //->add('createdAt', \Symfony\Component\Form\Extension\Core\Type\DateType::class, array('label'=>'Date de creation'))
            //->add('updatedAt', \Symfony\Component\Form\Extension\Core\Type\DateType::class, array('label'=>'Date de Modification'))
            ->add('category',null , array('label'=>'Categorie'))
            ->add('county', null, array('label'=>'Departement'))
            ->add('state', null, array('label'=>'Etat'))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Traobject::class,
        ]);
    }
}
