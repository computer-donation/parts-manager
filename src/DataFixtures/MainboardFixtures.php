<?php

namespace App\DataFixtures;

use App\Entity\Mainboard;
use App\Enum\FormFactor;
use App\Enum\RamOutline;
use App\Enum\RamType;
use App\Enum\Socket;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MainboardFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $items = [
            ['MSI G43-G45 MS-7594', Socket::LGA775, RamType::DDR3, RamOutline::Desktop, 8, FormFactor::midTower],
        ];
        foreach ($items as $item) {
            $mainboard = new Mainboard();
            $mainboard->setName($item[0])
                ->setSocket($item[1])
                ->setMemoryType($item[2])
                ->setMemoryOutline($item[3])
                ->setMemoryCap($item[4])
                ->setSize($item[5]);
            $manager->persist($mainboard);
        }

        $manager->flush();
    }
}
