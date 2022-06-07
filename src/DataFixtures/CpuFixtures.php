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
            ['name' => 'A8 9600', 'socket' => Socket::AM4],
            ['name' => 'Althlon 200GE', 'socket' => Socket::AM4],
            ['name' => 'Athlon 3000G', 'socket' => Socket::AM4],
            ['name' => 'Ryzen 3 1200', 'socket' => Socket::AM4],
            ['name' => 'Ryzen 3 1300X', 'socket' => Socket::AM4],
            ['name' => 'Ryzen 5 1400', 'socket' => Socket::AM4],
            ['name' => 'Ryzen 5 1500X', 'socket' => Socket::AM4],
            ['name' => 'Ryzen 5 1600', 'socket' => Socket::AM4],
            ['name' => 'Ryzen 5 1600X', 'socket' => Socket::AM4],
            ['name' => 'Ryzen 7 1700', 'socket' => Socket::AM4],
            ['name' => 'Ryzen 7 1700X', 'socket' => Socket::AM4],
            ['name' => 'Ryzen 7 1800X', 'socket' => Socket::AM4],
            ['name' => 'FX 6100', 'socket' => Socket::AM3PLUS],
            ['name' => 'FX 8100', 'socket' => Socket::AM3PLUS],
            ['name' => 'FX 4350', 'socket' => Socket::AM3PLUS],
            ['name' => 'FX 8350', 'socket' => Socket::AM3PLUS],
            ['name' => 'A4-3300', 'socket' => Socket::FM1],
            ['name' => 'A4 3400', 'socket' => Socket::FM1],
            ['name' => 'Athlon II X4 740', 'socket' => Socket::FM2],
            ['name' => 'A6-5400', 'socket' => Socket::FM2],
            ['name' => 'A6-7400', 'socket' => Socket::FM2],
            ['name' => 'A8-3870', 'socket' => Socket::FM1],
            ['name' => 'A8 7600', 'socket' => Socket::FM2PLUS],
            ['name' => 'A8-5600', 'socket' => Socket::FM2],
            ['name' => 'Core 2 Duo E6550', 'socket' => Socket::LGA775],
            ['name' => 'Celeron G1620', 'socket' => Socket::LGA1155],
            ['name' => 'Celeron G1630', 'socket' => Socket::LGA1155],
            ['name' => 'Celeron G1610', 'socket' => Socket::LGA1155],
            ['name' => 'Duo E7500', 'socket' => Socket::LGA775],
            ['name' => 'i5 520m', 'socket' => Socket::G1],
            ['name' => 'Pentinum G3220T', 'socket' => Socket::LGA1150],
            ['name' => 'i3 3240', 'socket' => Socket::LGA1155],
            ['name' => 'i5 540m', 'socket' => Socket::G1],
            ['name' => 'i5 3470S', 'socket' => Socket::LGA1155],
            ['name' => 'i5 2320', 'socket' => Socket::LGA1155],
            ['name' => 'i5 3570', 'socket' => Socket::LGA1155],
            ['name' => 'i5 2500K', 'socket' => Socket::LGA1155],
            ['name' => 'i5 4670', 'socket' => Socket::LGA1150],
            ['name' => 'i5 2600K', 'socket' => Socket::LGA1155],
            ['name' => 'i5 6320', 'socket' => Socket::LGA1151],
            ['name' => 'i5 6402P', 'socket' => Socket::LGA1151],
            ['name' => 'i5 7400T', 'socket' => Socket::LGA1151],
            ['name' => 'Core 2 Duo e8400', 'socket' => Socket::LGA775],
        ];
        foreach ($items as $item) {
            $cpu = new Cpu();
            $cpu->setName($item['name'])
                ->setSocket($item['socket'])
                ->setStatus(Status::Working);
            $manager->persist($cpu);
        }

        $manager->flush();
    }
}
