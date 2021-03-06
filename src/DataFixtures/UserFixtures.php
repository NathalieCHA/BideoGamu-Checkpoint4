<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
     public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void
    {
        $user1 = new User();
        $user1->setRoles(['ROLE_ADMIN']);
        $user1->setPassword($this->passwordHasher->hashPassword($user1, 'admin'));
        $user1->setEmail('lovinggames@game.com');
        $this->addReference('user1', $user1);

        $manager->persist($user1);

        $user2 = new User();
        $user2->setRoles(['ROLE_CONTRIBUTOR']);
        $user2->setPassword($this->passwordHasher->hashPassword($user2, '1234'));
        $user2->setEmail('ilovegames@yahoo.com');
        $this->addReference('user2', $user2);

        $manager->persist($user2);

        $manager->flush();
    }
}
