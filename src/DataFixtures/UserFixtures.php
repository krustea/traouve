<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private $passwordEncoder;
    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $admin = new User();
        $admin->setFirstname('Thibault');
        $admin->setLastname('Tregret');
        $admin->setEmail('thibault.tregret@gmail.com');
        $admin->setPassword($this->passwordEncoder->encodePassword($admin,"1234"));
        $admin->setRoles(["ROLE_ADMIN"]);
        $manager->persist($admin);
        $this->addReference('user-1', $admin);

        $user2 = new User();
        $user2->setFirstname('Pierre');
        $user2->setLastname('Jehan');
        $user2->setEmail('pjehan@gmail.com');
        $user2->setPassword($this->passwordEncoder->encodePassword($user2,"1234"));
        $user2->setRoles(["ROLE_USER"]);
        $user2->setPhone('0607080905');
        $manager->persist($user2);
        $this->addReference('user-2', $user2);

        $user3 = new User();
        $user3->setFirstname('Lecrique');
        $user3->setLastname('Julien');
        $user3->setEmail('jlecrique@gmail.com');
        $user3->setPassword($this->passwordEncoder->encodePassword($user3,"1234"));
        $user3->setRoles(["ROLE_USER"]);
        $user3->setPicture('user3.jpg');
        $manager->persist($user3);
        $this->addReference('user-3', $user3);

        $manager->flush();
    }

}
