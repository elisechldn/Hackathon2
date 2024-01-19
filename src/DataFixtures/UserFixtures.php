<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private UserPasswordHasherInterface $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }
    
    public function load(ObjectManager $manager): void
    {
        $contributor = new User();
        $contributor->setEmail('elise@chaldjian.com');
        $contributor->setFirstname('Elise');
        $contributor->setLastname('CHALDJIAN');
        $contributor->setAdress('122 rue du palais');
        $contributor->setCity('Paris');
        $contributor->setPostalCode('75000');
        $contributor->setGenre('Madame');
        $contributor->setRoles(['ROLE_USER']);        
        $hashedPassword = $this->passwordHasher->hashPassword(
            $contributor,
            'contributorpassword'
        );
        $this->addReference('user', $contributor);

        $contributor->setPassword($hashedPassword);
        $manager->persist($contributor);

        $manager->flush();
    }
}
