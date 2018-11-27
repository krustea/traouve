<?php

namespace App\DataFixtures;

use App\Entity\Traobject;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class TraobjectFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {

        $cle = new Traobject();
        $cle->setTitle("perdu clé");
        $cle->setDescription('perdu cle a rennes dans la rue de Nemours');
        $cle->setPicture('keys.jpg');
        $cle->setEventAt(new \DateTime('2018-12-10'));
        $cle->setCity('Rennes');
        $cle->setCreatedAt(new \DateTime('2018-12-11'));
        $cle->setCategory($this->getReference('category-1'));
        $cle->setCounty($this->getReference('county-1'));
        $cle->setState($this->getReference('state-2'));
        $cle->setUser($this->getReference('user-1'));
        $manager->persist($cle);


        $portefeuille = new Traobject();
        $portefeuille->setTitle("trouvé portefeuille");
        $portefeuille->setDescription('trouvé portefeuille centre ville Saint Brieuc');
        $portefeuille->setPicture('wallet.jpg');
        $portefeuille->setEventAt(new \DateTime('2018-11-05'));
        $portefeuille->setCity('Saint Brieuc');
        $portefeuille->setCreatedAt(new \DateTime('2018-11-06'));
        $portefeuille->setCategory($this->getReference('category-2'));
        $portefeuille->setCounty($this->getReference('county-2'));
        $portefeuille->setState($this->getReference('state-1'));
        $portefeuille->setUser($this->getReference('user-2'));
        $manager->persist($portefeuille);


        $jouet = new Traobject();
        $jouet->setTitle("trouve peluche");
        $jouet->setDescription('trouve peluche a vannes');
        $jouet->setPicture('teddy-bear.jpg');
        $jouet->setEventAt(new \DateTime('2018-09-10'));
        $jouet->setCity('Vannes');
        $jouet->setCreatedAt(new \DateTime('2018-09-11'));
        $jouet->setCategory($this->getReference('category-3'));
        $jouet->setCounty($this->getReference('county-4'));
        $jouet->setState($this->getReference('state-3'));
        $jouet->setUser($this->getReference('user-3'));
        $manager->persist($jouet);


        $manager->flush();
    }

    /**
     * This method must return an array of fixtures classes
     * on which the implementing class depends on
     *
     * @return array
     */
    public function getDependencies()
    {
    return [CategoryFixtures::class, CountyFixtures::class, StateFixtures::class, UserFixtures::class];
    }
}
