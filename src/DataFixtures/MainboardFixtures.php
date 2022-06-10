<?php

namespace App\DataFixtures;

use App\Entity\Mainboard;
use App\Entity\Vga\DisplayPorts;
use App\Enum\MainboardFormFactor;
use App\Enum\RamFormFactor;
use App\Enum\RamType;
use App\Enum\Socket;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Mainboard\DataConnectors;

class MainboardFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $items = [
            [
                'name' => 'MSI G43-G45 MS-7594',
                'socket' => Socket::LGA775,
                'memoryType' => RamType::DDR3,
                'memoryFormFactor' => RamFormFactor::Desktop,
                'memoryCap' => 8,
                'formFactor' => MainboardFormFactor::atx,
                'integratedGraphics' => true,
                'displayPorts' => (new DisplayPorts())
                    ->setVga(1),
                'dataConnectors' => (new DataConnectors())
                    ->setSata(2),
            ],
            [
                'name' => 'Gigabyte B450M',
                'socket' => Socket::AM4,
                'memoryType' => RamType::DDR4,
                'memoryFormFactor' => RamFormFactor::Desktop,
                'memoryCap' => 32,
                'formFactor' => MainboardFormFactor::microAtx,
                'integratedGraphics' => false,
                'displayPorts' => (new DisplayPorts())
                    ->setVga(1)
                    ->setDvi(1)
                    ->setHdmi(1),
                'dataConnectors' => (new DataConnectors())
                    ->setSata(4)
                    ->setM2(1),
            ],
            [
                'name' => 'Foxconn H61M',
                'socket' => Socket::LGA1155,
                'memoryType' => RamType::DDR3,
                'memoryFormFactor' => RamFormFactor::Desktop,
                'memoryCap' => 16,
                'formFactor' => MainboardFormFactor::microAtx,
                'integratedGraphics' => true,
                'displayPorts' => (new DisplayPorts())
                    ->setVga(1)
                    ->setHdmi(1),
                'dataConnectors' => (new DataConnectors())
                    ->setSata(4),
            ],
            [
                'name' => 'Asrock H71M',
                'socket' => Socket::LGA1155,
                'memoryType' => RamType::DDR3,
                'memoryFormFactor' => RamFormFactor::Desktop,
                'memoryCap' => 16,
                'formFactor' => MainboardFormFactor::microAtx,
                'integratedGraphics' => true,
                'displayPorts' => (new DisplayPorts())
                    ->setVga(1)
                    ->setDvi(1),
                'dataConnectors' => (new DataConnectors())
                    ->setSata(4),
            ],
            [
                'name' => 'Asus B75',
                'socket' => Socket::LGA1155,
                'memoryType' => RamType::DDR3,
                'memoryFormFactor' => RamFormFactor::Desktop,
                'memoryCap' => 16,
                'formFactor' => MainboardFormFactor::microAtx,
                'integratedGraphics' => true,
                'displayPorts' => (new DisplayPorts())
                    ->setHdmi(1)
                    ->setDvi(1),
                'dataConnectors' => (new DataConnectors())
                    ->setSata(6),
            ],
            [
                'name' => 'Asrock H310M-DGS',
                'socket' => Socket::LGA1151,
                'memoryType' => RamType::DDR4,
                'memoryFormFactor' => RamFormFactor::Desktop,
                'memoryCap' => 64,
                'formFactor' => MainboardFormFactor::microAtx,
                'integratedGraphics' => false,
                'displayPorts' => (new DisplayPorts())
                    ->setDvi(1),
                'dataConnectors' => (new DataConnectors())
                    ->setSata(4),
            ],
            [
                'name' => 'B360M D2V',
                'socket' => Socket::LGA1151,
                'memoryType' => RamType::DDR4,
                'memoryFormFactor' => RamFormFactor::Desktop,
                'memoryCap' => 32,
                'formFactor' => MainboardFormFactor::microAtx,
                'integratedGraphics' => false,
                'displayPorts' => (new DisplayPorts())
                    ->setDvi(1)
                    ->setVga(1),
                'dataConnectors' => (new DataConnectors())
                    ->setSata(6)
                    ->setM2(1),
            ],
            [
                'name' => 'Asrock B365M',
                'socket' => Socket::LGA1151,
                'memoryType' => RamType::DDR4,
                'memoryFormFactor' => RamFormFactor::Desktop,
                'memoryCap' => 64,
                'formFactor' => MainboardFormFactor::microAtx,
                'integratedGraphics' => false,
                'displayPorts' => (new DisplayPorts())
                    ->setDvi(1)
                    ->setHdmi(1),
                'dataConnectors' => (new DataConnectors())
                    ->setSata(6)
                    ->setM2(2),
            ],
            [
                'name' => 'MSI H310F',
                'socket' => Socket::LGA1151,
                'memoryType' => RamType::DDR4,
                'memoryFormFactor' => RamFormFactor::Desktop,
                'memoryCap' => 32,
                'formFactor' => MainboardFormFactor::atx,
                'integratedGraphics' => false,
                'displayPorts' => (new DisplayPorts())
                    ->setDvi(1),
                'dataConnectors' => (new DataConnectors())
                    ->setSata(4),
            ],
            [
                'name' => 'H81M-P33',
                'socket' => Socket::LGA1150,
                'memoryType' => RamType::DDR3,
                'memoryFormFactor' => RamFormFactor::Desktop,
                'memoryCap' => 16,
                'formFactor' => MainboardFormFactor::microAtx,
                'integratedGraphics' => false,
                'displayPorts' => (new DisplayPorts())
                    ->setDvi(1)
                    ->setVga(1),
                'dataConnectors' => (new DataConnectors())
                    ->setSata(4),
            ],
            [
                'name' => 'GA-B85M-D3H',
                'socket' => Socket::LGA1150,
                'memoryType' => RamType::DDR3,
                'memoryFormFactor' => RamFormFactor::Desktop,
                'memoryCap' => 32,
                'formFactor' => MainboardFormFactor::microAtx,
                'integratedGraphics' => false,
                'displayPorts' => (new DisplayPorts())
                    ->setDvi(1)
                    ->setVga(1)
                    ->setHdmi(1),
                'dataConnectors' => (new DataConnectors())
                    ->setSata(6),
            ],
        ];
        foreach ($items as $item) {
            $mainboard = new Mainboard();
            $mainboard->setName($item['name'])
                ->setSocket($item['socket'])
                ->setMemoryType($item['memoryType'])
                ->setMemoryFormFactor($item['memoryFormFactor'])
                ->setMemoryCap($item['memoryCap'])
                ->setFormFactor($item['formFactor'])
                ->setIntegratedGraphics($item['integratedGraphics'])
                ->setDisplayPorts($item['displayPorts'])
                ->setDataConnectors($item['dataConnectors']);
            $manager->persist($mainboard);
        }

        $manager->flush();
    }
}
