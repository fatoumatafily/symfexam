<?php

namespace App\DataFixtures;

use App\Entity\AnneeScolaire;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AnneeScolaireFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i=2019; $i <2022 ; $i++) { 
            $data=new AnneeScolaire;
            $data->setLibelle($i."-".($i+1));
            if($i==2021){
                $data->setIsStatut(true);
            }else{
                $data->setIsStatut(false);
            }
            $this->addReference("AnneeScolaire".$i, $data);
            $manager->persist($data);
        }

        $manager->flush();
    }
}
