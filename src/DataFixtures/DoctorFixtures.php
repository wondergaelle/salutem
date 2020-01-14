<?php

namespace App\DataFixtures;

use App\Entity\Doctor;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class DoctorFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $jack = new Doctor();
        $jack->setFirstname("Jack");
        $jack->setLastname("Smith");
        $jack->setPhoto("doctor-1.jpg");
        $jack->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.");
        $jack->addSkill($this->getReference("skill-homéopathe"));
        $manager->persist($jack);

        $norma = new Doctor();
        $norma->setFirstname("Norma");
        $norma->setLastname("Jones");
        $norma->setPhoto("doctor-2.jpg");
        $norma->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.");
        $norma->addSkill($this->getReference("skill-dentiste"));
        $manager->persist($norma);

        $ross = new Doctor();
        $ross->setFirstname("Ross");
        $ross->setLastname("Geller");
        $ross->setPhoto("doctor-3.jpg");
        $ross->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.");
        $ross->addSkill($this->getReference("skill-médecin"));
        $ross->addSkill($this->getReference("skill-homéopathe"));
        $manager->persist($ross);

        $manager->flush();
    }

    /**
     * This method must return an array of fixtures classes
     * on which the implementing class depends on
     *
     * @return class-string[]
     */
    public function getDependencies()
    {
        return [SkillFixtures::class
        ];
    }
}
