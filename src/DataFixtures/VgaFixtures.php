<?php

namespace App\DataFixtures;

use App\Entity\Monitor;
use App\Entity\Vga;
use App\Entity\Vga\DisplayPorts;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class VgaFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $items = [
            ['name' => 'Nvidia QUADRO FX570 256MB 128-bit GDDR2', 'suggestedPsu' => 200, 'displayPorts' => (new DisplayPorts())->setDvi(2)],
            ['name' => 'Nvidia QUADRO FX370 256MB 64-bit GDDR2', 'suggestedPsu' => 200, 'displayPorts' => (new DisplayPorts())->setDvi(2)],
            ['name' => 'Nvidia QUADRO FX580 512MB 128-bit GDDR3', 'suggestedPsu' => 200, 'displayPorts' => (new DisplayPorts())->setDvi(1)->setDisplayPort(2)],
            ['name' => 'Nvidia 8600 GTS 256MB 128-bit DDR3', 'suggestedPsu' => 350, 'displayPorts' => (new DisplayPorts())->setDvi(2)],
            ['name' => 'Gigabyte 430 2G', 'suggestedPsu' => 400, 'displayPorts' => (new DisplayPorts())->setDvi(1)->setVga(1)->setHdmi(1)],
            ['name' => 'Gigabyte GT630 2G D3', 'suggestedPsu' => 350, 'displayPorts' => (new DisplayPorts())->setDvi(1)->setVga(1)->setHdmi(1)],
            ['name' => 'MSI HD7970 3G Twin Frozr III 2 Fan', 'suggestedPsu' => 600, 'displayPorts' => (new DisplayPorts())->setDvi(2)->setHdmi(1)->setMiniDisplayPort(2)],
            ['name' => 'Power Color R9 270 2G D5', 'suggestedPsu' => 350, 'displayPorts' => (new DisplayPorts())->setDvi(2)->setHdmi(1)->setDisplayPort(1)],
            ['name' => 'MSI HD7730 1G D5', 'suggestedPsu' => 0, 'displayPorts' => (new DisplayPorts())->setDvi(1)->setHdmi(1)->setDisplayPort(1)],
            ['name' => 'Zotac GTX650 1G D5', 'suggestedPsu' => 400, 'displayPorts' => (new DisplayPorts())->setDvi(2)->setMiniHdmi(1)],
            ['name' => 'Biostar RX560 4G D5 2 Fan', 'suggestedPsu' => 600, 'displayPorts' => (new DisplayPorts())->setDvi(1)->setHdmi(1)->setDisplayPort(1)],
            ['name' => 'Gigabyte GT740 2G D5', 'suggestedPsu' => 400, 'displayPorts' => (new DisplayPorts())->setDvi(2)->setHdmi(1)->setVga(1)],
            ['name' => 'Gigabyte GT730 2G D5', 'suggestedPsu' => 300, 'displayPorts' => (new DisplayPorts())->setDvi(1)->setHdmi(1)->setVga(1)],
            ['name' => 'Galax GT 1030 2G D5 1Fan', 'suggestedPsu' => 300, 'displayPorts' => (new DisplayPorts())->setVga(1)],
            ['name' => 'Asus GTX 750Ti 2G DDR5 1 Fan', 'suggestedPsu' => 400, 'displayPorts' => (new DisplayPorts())->setDvi(2)->setHdmi(1)->setVga(1)],
            ['name' => 'MSI Aero RX 550 2GB 1 Fan', 'suggestedPsu' => 400, 'displayPorts' => (new DisplayPorts())->setDvi(1)->setHdmi(1)->setDisplayPort(1)],
            ['name' => 'MSI GTX950 2G D5 1 Fan', 'suggestedPsu' => 350, 'displayPorts' => (new DisplayPorts())->setDvi(1)->setHdmi(1)->setDisplayPort(1)],
        ];
        foreach ($items as $item) {
            $psu = new Vga();
            $psu->setName($item['name'])
                ->setSuggestedPsu($item['suggestedPsu'])
                ->setDisplayPorts($item['displayPorts']);
            $manager->persist($psu);
        }

        $manager->flush();
    }
}
