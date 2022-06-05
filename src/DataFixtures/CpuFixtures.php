<?php

namespace App\DataFixtures;

use App\Entity\Cpu;
use App\Enum\Socket;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CpuFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $items = [
            ['A8 9600', Socket::AM4],
            ['Althlon 200GE', Socket::AM4],
            ['Athlon 3000G', Socket::AM4],
            ['Ryzen 3 1200', Socket::AM4],
            ['Ryzen 3 1300X', Socket::AM4],
            ['Ryzen 5 1400', Socket::AM4],
            ['Ryzen 5 1500X', Socket::AM4],
            ['Ryzen 5 1600', Socket::AM4],
            ['Ryzen 5 1600X', Socket::AM4],
            ['Ryzen 7 1700', Socket::AM4],
            ['Ryzen 7 1700X', Socket::AM4],
            ['Ryzen 7 1800X', Socket::AM4],
            ['FX 6100', Socket::AM3PLUS],
            ['FX 8100', Socket::AM3PLUS],
            ['FX 4350', Socket::AM3PLUS],
            ['FX 8350', Socket::AM3PLUS],
            ['A4-3300', Socket::FM1],
            ['A4 3400', Socket::FM1],
            ['Athlon II X4 740', Socket::FM2],
            ['A6-5400', Socket::FM2],
            ['A6-7400', Socket::FM2],
            ['A8-3870', Socket::FM1],
            ['A8 7600', Socket::FM2PLUS],
            ['A8-5600', Socket::FM2],
            ['Core 2 Duo E6550', Socket::LGA775],
            ['Celeron G1620', Socket::LGA1155],
            ['Celeron G1630', Socket::LGA1155],
            ['Celeron G1610', Socket::LGA1155],
            ['Duo E7500', Socket::LGA775],
            ['i5 520m', Socket::G1],
            ['Pentinum G3220T', Socket::LGA1150],
            ['i3 3240', Socket::LGA1155],
            ['i5 540m', Socket::G1],
            ['i5 3470S', Socket::LGA1155],
            ['i5 2320', Socket::LGA1155],
            ['i5 3570', Socket::LGA1155],
            ['i5 2500K', Socket::LGA1155],
            ['i5 4670', Socket::LGA1150],
            ['i5 2600K', Socket::LGA1155],
            ['i5 6320', Socket::LGA1151],
            ['i5 6402P', Socket::LGA1151],
            ['i5 7400T', Socket::LGA1151],
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
