<?php

namespace App\DataFixtures;

use App\Entity\Monitor;
use App\Entity\Vga\DisplayPorts;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MonitorFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $items = [
            ['name' => 'LCD 17” HP L1710', 'ports' => (new DisplayPorts())->setVga(1)],
            ['name' => 'LCD 19” HP LE1910', 'ports' => (new DisplayPorts())->setVga(1)],
            ['name' => 'LCD 22” Dell P2210', 'ports' => (new DisplayPorts())->setVga(1)->setDvi(1)->setDisplayPort(1)],
            ['name' => 'LCD 27” ViewPaker E270/271EMG-D', 'ports' => (new DisplayPorts())->setVga(1)->setDvi(1)],
            ['name' => 'LCD 24” Viewsonic VA2465', 'ports' => (new DisplayPorts())->setVga(1)->setHdmi(1)],
            ['name' => 'LCD 27” Knighteen All In One KNPA27P FHD', 'ports' => (new DisplayPorts())->setDvi(1)],
            ['name' => 'LCD 24” Viewsonic VA2446', 'ports' => (new DisplayPorts())->setVga(1)->setDvi(1)],
            ['name' => 'LCD 24” Viewsonic VA2452', 'ports' => (new DisplayPorts())->setVga(1)->setDvi(1)->setDisplayPort(1)],
            ['name' => 'LCD 27” LG 27MP35 IPS', 'ports' => (new DisplayPorts())->setVga(1)->setDvi(1)->setHdmi(1)],
            ['name' => 'LCD 27” LG 27MP37 IPS', 'ports' => (new DisplayPorts())->setVga(1)->setDvi(1)->setHdmi(1)],
            ['name' => 'LCD 24” Dell E248WFP Widescreen', 'ports' => (new DisplayPorts())->setVga(1)->setDvi(1)],
            ['name' => ' LCD 24” Dell P2414H', 'ports' => (new DisplayPorts())->setVga(1)->setDvi(1)->setDisplayPort(1)],
            ['name' => 'LCD 24” Dell P2412M', 'ports' => (new DisplayPorts())->setVga(1)->setDvi(1)->setDisplayPort(1)],
            ['name' => 'LCD 27″ LG 27MP38 IPS', 'ports' => (new DisplayPorts())->setVga(1)->setDvi(1)->setHdmi(1)],
            ['name' => 'LCD 27” AOC E2752V Full HD', 'ports' => (new DisplayPorts())->setVga(1)->setDvi(1)],
        ];
        foreach ($items as $item) {
            $psu = new Monitor();
            $psu->setName($item['name'])
                ->setPorts($item['ports']);
            $manager->persist($psu);
        }

        $manager->flush();
    }
}
