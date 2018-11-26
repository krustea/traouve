<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CountyFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $counties = [
            ["Ille et Vilaine", "35"],
            ["Cotes d'Armor", "22"],
            ["Finistere", "29"],
            ["Morbihan", "56"],
        ];


        foreach ($counties as $key => $county) {
            $cat = new \App\Entity\County();
            $cat->setLabel($county[0]);
            $cat->setZipcode($county[1]);
            $manager->persist($cat);
            $this->setReference('county-' . ($key + 1), $cat);
        }

        $manager->flush();
    }
}
