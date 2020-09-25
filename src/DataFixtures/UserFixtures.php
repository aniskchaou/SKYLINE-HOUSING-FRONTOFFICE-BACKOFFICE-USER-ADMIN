<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\User;
class UserFixtures extends Fixture
{
    /*
    * @var UserPasswordEncoderInterface
    */
    
    private $encoder;
    
    public function __construct(UserPasswordEncoderInterface $encoder) {
        $this->encoder = $encoder;
    }
    
    public function load(ObjectManager $manager)
    {
        $user=new User();
        $user->setUsername('admin');
        $user->setPassword($this->encoder->encodePassword($user,'admin'));
        $manager->persist($user);
        $manager->flush();
    }
}
