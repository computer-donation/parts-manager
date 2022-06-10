<?php

namespace App\DataFixtures;

use App\Entity\Cpu;
use App\Enum\Socket;
use App\Enum\Status;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CpuFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $items = [
            ['name' => 'A8 9600', 'socket' => Socket::AM4, 'tdp' => 65, 'integratedGraphics' => true],
            ['name' => 'Althlon 200GE', 'socket' => Socket::AM4, 'tdp' => 35, 'integratedGraphics' => true],
            ['name' => 'Athlon 3000G', 'socket' => Socket::AM4, 'tdp' => 35, 'integratedGraphics' => true],
            ['name' => 'Ryzen 3 1200', 'socket' => Socket::AM4, 'tdp' => 65, 'integratedGraphics' => false],
            ['name' => 'Ryzen 3 1300X', 'socket' => Socket::AM4, 'tdp' => 65, 'integratedGraphics' => false],
            ['name' => 'Ryzen 5 1400', 'socket' => Socket::AM4, 'tdp' => 65, 'integratedGraphics' => false],
            ['name' => 'Ryzen 5 1500X', 'socket' => Socket::AM4, 'tdp' => 65, 'integratedGraphics' => false],
            ['name' => 'Ryzen 5 1600', 'socket' => Socket::AM4, 'tdp' => 65, 'integratedGraphics' => false],
            ['name' => 'Ryzen 5 1600X', 'socket' => Socket::AM4, 'tdp' => 95, 'integratedGraphics' => false],
            ['name' => 'Ryzen 7 1700', 'socket' => Socket::AM4, 'tdp' => 65, 'integratedGraphics' => false],
            ['name' => 'Ryzen 7 1700X', 'socket' => Socket::AM4, 'tdp' => 95, 'integratedGraphics' => false],
            ['name' => 'Ryzen 7 1800X', 'socket' => Socket::AM4, 'tdp' => 95, 'integratedGraphics' => false],
            ['name' => 'FX 6100', 'socket' => Socket::AM3PLUS, 'tdp' => 95, 'integratedGraphics' => false],
            ['name' => 'FX 4350', 'socket' => Socket::AM3PLUS, 'tdp' => 125, 'integratedGraphics' => false],
            ['name' => 'FX 8350', 'socket' => Socket::AM3PLUS, 'tdp' => 125, 'integratedGraphics' => false],
            ['name' => 'Athlon II X4 740', 'socket' => Socket::FM2, 'tdp' => 65, 'integratedGraphics' => false],
            ['name' => 'A8 7600', 'socket' => Socket::FM2PLUS, 'tdp' => 65, 'integratedGraphics' => true],
            ['name' => 'Core 2 Duo E6550', 'socket' => Socket::LGA775, 'tdp' => 65, 'integratedGraphics' => false],
            ['name' => 'Celeron G1620', 'socket' => Socket::LGA1155, 'tdp' => 55, 'integratedGraphics' => true],
            ['name' => 'Celeron G1630', 'socket' => Socket::LGA1155, 'tdp' => 55, 'integratedGraphics' => true],
            ['name' => 'Celeron G1610', 'socket' => Socket::LGA1155, 'tdp' => 55, 'integratedGraphics' => true],
            ['name' => 'Duo E7500', 'socket' => Socket::LGA775, 'tdp' => 65, 'integratedGraphics' => false],
            ['name' => 'i5 520m', 'socket' => Socket::G1, 'tdp' => 35, 'integratedGraphics' => true],
            ['name' => 'Pentinum G3220T', 'socket' => Socket::LGA1150, 'tdp' => 35, 'integratedGraphics' => true],
            ['name' => 'i3 3240', 'socket' => Socket::LGA1155, 'tdp' => 55, 'integratedGraphics' => true],
            ['name' => 'i5 3470S', 'socket' => Socket::LGA1155, 'tdp' => 65, 'integratedGraphics' => true],
            ['name' => 'i5 2320', 'socket' => Socket::LGA1155, 'tdp' => 95, 'integratedGraphics' => true],
            ['name' => 'i5 3570', 'socket' => Socket::LGA1155, 'tdp' => 77, 'integratedGraphics' => true],
            ['name' => 'i5 2500K', 'socket' => Socket::LGA1155, 'tdp' => 95, 'integratedGraphics' => true],
            ['name' => 'i5 4670', 'socket' => Socket::LGA1150, 'tdp' => 84, 'integratedGraphics' => true],
            ['name' => 'i5 2600K', 'socket' => Socket::LGA1155, 'tdp' => 95, 'integratedGraphics' => true],
            ['name' => 'i5 6402P', 'socket' => Socket::LGA1151, 'tdp' => 65, 'integratedGraphics' => true],
            ['name' => 'i5 7400T', 'socket' => Socket::LGA1151, 'tdp' => 35, 'integratedGraphics' => true],
            ['name' => 'Core 2 Duo e8400', 'socket' => Socket::LGA775, 'tdp' => 65, 'integratedGraphics' => false],
        ];
        foreach ($items as $item) {
            $cpu = new Cpu();
            $cpu->setName($item['name'])
                ->setSocket($item['socket'])
                ->setTdp($item['tdp'])
                ->setIntegratedGraphics($item['integratedGraphics'])
                ->setStatus(Status::Working);
            $manager->persist($cpu);
        }

        $manager->flush();
    }
}
