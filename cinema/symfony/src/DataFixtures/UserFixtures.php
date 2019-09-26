<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
//use Symfony\Component\Security\Core\User\User;
//use Symfony\Bridge\Doctrine\Tests\Fixtures\User;
use App\Entity\User;

class UserFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }


    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        // set admin user
        $user = new User();
        $user->setEmail('admin@admin.com');
        $user->setRoles(['ROLE_ADMIN']);
        $user->setPassword($this->passwordEncoder->encodePassword($user,'admin'));

//        for ($i = 0; $i < 20; $i++)
//        {
//            $user->setEmail($i . 'user@user.com');
//            $user->setRoles(['ROLE_USER']);
//            $user->setPassword($this->passwordEncoder->encodePassword($user, 'user'));
//        }

        $manager->persist($user);
        $manager->flush();
    }

//    public function load(ObjectManager $manager)
//    {
//        // $product = new Product();
//        // $manager->persist($product);
//
//        $manager->flush();
//    }
}
