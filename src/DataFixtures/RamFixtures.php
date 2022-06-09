<?php

namespace App\DataFixtures;

use App\Entity\Ram;
use App\Enum\RamFormFactor;
use App\Enum\RamType;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class RamFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $items = [
            ['name' => 'DDR3 4GB bus 1600 Crucial', 'formFactor' => RamFormFactor::Desktop, 'type' => RamType::DDR3, 'size' => 4],
            ['name' => 'DDR3 4GB 1600 Gskill Aegis', 'formFactor' => RamFormFactor::Desktop, 'type' => RamType::DDR3, 'size' => 4],
            ['name' => 'DDR2 1GB bus 800 HP', 'formFactor' => RamFormFactor::Desktop, 'type' => RamType::DDR2, 'size' => 1],
            ['name' => 'DDR2 2GB bus 800 HP', 'formFactor' => RamFormFactor::Desktop, 'type' => RamType::DDR2, 'size' => 2],
            ['name' => 'DDR3 4GB bus 1066 Corsair', 'formFactor' => RamFormFactor::Desktop, 'type' => RamType::DDR2, 'size' => 2],
            ['name' => 'DDR3 4GB bus 1600 Kingmax', 'formFactor' => RamFormFactor::Desktop, 'type' => RamType::DDR3, 'size' => 4],
            ['name' => '4GB DDR4 2133 Kingston', 'formFactor' => RamFormFactor::Desktop, 'type' => RamType::DDR4, 'size' => 4],
            ['name' => '4GB DDR4 2400 Gskill Ripjaws', 'formFactor' => RamFormFactor::Desktop, 'type' => RamType::DDR4, 'size' => 4],
            ['name' => '4G DDR4 2133 Team', 'formFactor' => RamFormFactor::Desktop, 'type' => RamType::DDR4, 'size' => 4],
            ['name' => 'DDR3 4GB bus 1333 Kingmax', 'formFactor' => RamFormFactor::Desktop, 'type' => RamType::DDR3, 'size' => 4],
            ['name' => '4G DDR4 3200 Micron', 'formFactor' => RamFormFactor::Laptop, 'type' => RamType::DDR4, 'size' => 4],
            ['name' => 'Hynix 4GB DDR4 3200 SODIMM', 'formFactor' => RamFormFactor::Laptop, 'type' => RamType::DDR4, 'size' => 4],
            ['name' => '16GB DDR4 2400 Kingmax', 'formFactor' => RamFormFactor::Desktop, 'type' => RamType::DDR4, 'size' => 16],
            ['name' => 'DDR4 Team 8G/2133 Elite', 'formFactor' => RamFormFactor::Desktop, 'type' => RamType::DDR4, 'size' => 8],
            ['name' => '8GB DDR3 1600 Dato', 'formFactor' => RamFormFactor::Desktop, 'type' => RamType::DDR3, 'size' => 8],
            ['name' => '8GB DDR3 1600 Kingston', 'formFactor' => RamFormFactor::Desktop, 'type' => RamType::DDR3, 'size' => 8],
        ];
        foreach ($items as $item) {
            $psu = new Ram();
            $psu->setName($item['name'])
                ->setFormFactor($item['formFactor'])
                ->setType($item['type'])
                ->setSize($item['size']);
            $manager->persist($psu);
        }

        $manager->flush();
    }
}
