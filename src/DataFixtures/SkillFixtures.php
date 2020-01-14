<?php

namespace App\DataFixtures;

use App\Entity\Skill;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class SkillFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $homeopathe = new Skill();
        $homeopathe->setLabel("Homéopathe");
        $manager->persist($homeopathe);
        $this->addReference("skill-homéopathe", $homeopathe);

        $medecin = new Skill();
        $medecin->setLabel("Médecin");
        $manager->persist($medecin);
        $this->addReference("skill-médecin", $medecin);

        $dentiste = new Skill();
        $dentiste->setLabel("Dentiste");
        $manager->persist($dentiste);
        $this->addReference("skill-dentiste", $dentiste);

        $manager->flush();
    }
}
