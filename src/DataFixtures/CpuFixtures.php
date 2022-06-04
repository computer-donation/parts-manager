<?php

namespace App\DataFixtures;

use App\Entity\Cpu;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CpuFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $items = [
            ['A8 9600', 'AM4'],
            ['Althlon 200GE', 'AM4'],
            ['Athlon 3000G', 'AM4'],
            ['Ryzen 3 1200', 'AM4'],
            ['Ryzen 3 1300X', 'AM4'],
            ['Ryzen 5 1400', 'AM4'],
            ['Ryzen 5 1500X', 'AM4'],
            ['Ryzen 5 1600', 'AM4'],
            ['Ryzen 5 1600X', 'AM4'],
            ['Ryzen 7 1700', 'AM4'],
            ['Ryzen 7 1700X', 'AM4'],
            ['Ryzen 7 1800X', 'AM4'],
            ['FX 6100', 'AM3+'],
            ['FX 8100', 'AM3+'],
            ['FX 4350', 'AM3+'],
            ['FX 8350', 'AM3+'],
            ['A4-3300', 'FM1'],
            ['A4 3400', 'FM1'],
            ['Athlon II X4 740', 'FM2'],
            ['A6-5400', 'FM2'],
            ['A6-7400', 'FM2'],
            ['A8-3870', 'FM1'],
            ['A8 7600', 'FM2+'],
            ['A8-5600', 'FM2'],
            ['Core 2 Duo E6550', 'LGA775'],
            ['Celeron G1620', 'LGA1155'],
            ['Celeron G1630', 'LGA1155'],
            ['Celeron G1610', 'LGA1155'],
            ['Duo E7500', 'LGA775'],
            ['i5 520m', 'PGA988'],
            ['Pentinum G3220T', 'LGA1150'],
            ['i3 3240', 'LGA1155'],
            ['i5 540m', 'PGA988'],
            ['i5 3470S', 'LGA1155'],
            ['i5 2320', 'LGA1155'],
            ['i5 3570', 'LGA1155'],
            ['i5 2500K', 'LGA1155'],
            ['i5 4670', 'LGA1150'],
            ['i5 2600K', 'LGA1155'],
            ['i5 6320', 'LGA1151'],
            ['i5 6402P', 'LGA1151'],
            ['i5 7400T', 'LGA1151'],
        ];
        foreach ($items as $item) {
            $cpu = new Cpu();
            $cpu->setName($item[0]);
            $cpu->setSocket($item[1]);
            $manager->persist($cpu);
        }

        $manager->flush();
    }
}
