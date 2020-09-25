<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use App\Entity\Property;

class PropertyFixtures extends Fixture
{
    //using faker to insert data
    public function load(ObjectManager $manager)
    {
        $faker=Factory::create('fr_FR');
       
        for ($i=0; $i < 10 ; $i++) { 
            $property = new Property();
            $property->setTitle($faker->words(3,true))
                ->setPrice($faker->numberBetween(250,3000))
                ->setRooms($faker->numberBetween(3,5))
                ->setBedrooms(3)
                ->setDescription($faker->sentences(3,true))
                ->setSurface(60)
                ->setFloor($faker->numberBetween(1,5))
                ->setHeat(1)
                ->setCity($faker->city)
                ->setAddress($faker->address)
                ->setPostalCode($faker->postcode);
    
           
                $manager->persist($property);
        }
       
        $manager->flush();
    }
}
