<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{

    public function load(ObjectManager $manager)
    {
        $cles = new Category();
        $cles->setLabel('clés');
        $cles->setColor('red');
        $cles->setIcon('fa-key');
        $manager->persist($cles);
        $this->addReference('category-1', $cles);

        $portefeuille = new Category();
        $portefeuille->setLabel('Portefeuille');
        $portefeuille->setColor('blue');
        $portefeuille->setIcon('fa-money');
        $manager->persist($portefeuille);
        $this->addReference('category-2', $portefeuille);

        $jouet = new Category();
        $jouet->setLabel('Jouets');
        $jouet->setColor('green');
        $jouet->setIcon('fa-bullseye');
        $manager->persist($jouet);
        $this->addReference('category-3', $jouet);

        $animaux = new Category();
        $animaux->setLabel('Animaux');
        $animaux->setColor('yellow');
        $animaux->setIcon('fa-paw');
        $manager->persist($animaux);
        $this->addReference('category-4', $animaux);

        $electroniques = new Category();
        $electroniques->setLabel('Electroniques');
        $electroniques->setColor('purple');
        $electroniques->setIcon('fa-mobile');
        $manager->persist($electroniques);
        $this->addReference('category-5', $electroniques);

        $vetements = new Category();
        $vetements->setLabel('Vétements');
        $vetements->setColor('orange');
        $vetements->setIcon('fa-tshirt');
        $manager->persist($vetements);
        $this->addReference('category-6', $vetements);

        $manager->flush();

    }
}
