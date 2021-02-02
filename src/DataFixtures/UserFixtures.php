<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    // service to encode password
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder) {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $user = new User();
        //$user->setRoles(['ROLE_ADMIN']);
        $user->setEmail('user@test.com');
        $user->setPassword($this->passwordEncoder->encodePassword(
            $user,'toto'
        ));

        $manager->persist($user);

        $manager->flush();
    }
}
