<?php

namespace App\DataFixtures;

use App\Entity\Classe;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ClasseFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $classes=["L3MAE3","L2MAE","L1MAE","L3GLRS","L2GLRS","L1GLRS"];
    
        foreach ($classes as $i=> $libelle) {
             $data=new Classe;
             $data->setLibelle($libelle);
             $this->addReference("Classe".$i, $data);
             $manager->persist($data);
        }

        $manager->flush();
    }
}
