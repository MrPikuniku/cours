<?php

namespace App\DataFixtures;

use App\Entity\Prof ;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        for ($i = 1; $i <= 50; $i++) {
            $prof = new prof();
            $prof->setNom("BRABANT")
            ->setHeure(mt_rand(1064465465,11484988848));
            $manager->persist($prof);
        }
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
