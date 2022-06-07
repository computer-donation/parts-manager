<?php

namespace App\DataFixtures;

use App\Entity\Mainboard;
use App\Enum\CaseFormFactor;
use App\Enum\MainboardFormFactor;
use App\Enum\RamFormFactor;
use App\Enum\RamType;
use App\Enum\Socket;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MainboardFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $items = [
            ['MSI G43-G45 MS-7594', Socket::LGA775, RamType::DDR3, RamFormFactor::Desktop, 8, MainboardFormFactor::atx],
            ['Gigabyte B450M', Socket::AM4, RamType::DDR4, RamFormFactor::Desktop, 32, MainboardFormFactor::microAtx],
        ];
        foreach ($items as $item) {
            $mainboard = new Mainboard();
            $mainboard->setName($item[0])
                ->setSocket($item[1])
                ->setMemoryType($item[2])
                ->setMemoryFormFactor($item[3])
                ->setMemoryCap($item[4])
                ->setFormFactor($item[5]);
            $manager->persist($mainboard);
        }

        $manager->flush();
    }
}
