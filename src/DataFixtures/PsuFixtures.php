<?php

namespace App\DataFixtures;

use App\Entity\Psu;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PsuFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $items = [
            ['name' => 'Antec 300W', 'maxPower' => 300],
            ['name' => 'Huntkey 350W', 'maxPower' => 350],
            ['name' => 'Acbel 350-380W', 'maxPower' => 350],
            ['name' => 'Acbel 300-340W', 'maxPower' => 300],
            ['name' => 'Xigmatek 300W', 'maxPower' => 300],
            ['name' => 'Delta 300W Dps-2300Lb-2A', 'maxPower' => 300],
            ['name' => 'Hunkey 400W 53Fp', 'maxPower' => 400],
            ['name' => 'Acbel 400W', 'maxPower' => 400],
            ['name' => 'Acbel 470W', 'maxPower' => 470],
            ['name' => 'Cooler Master 350W', 'maxPower' => 350],
            ['name' => 'Golden Field 400W', 'maxPower' => 400],
            ['name' => 'Thermaltake Litepower 450W', 'maxPower' => 450],
            ['name' => '550-600W Acbel', 'maxPower' => 550],
        ];
        foreach ($items as $item) {
            $psu = new Psu();
            $psu->setName($item['name'])
                ->setMaxPower($item['maxPower']);
            $manager->persist($psu);
        }

        $manager->flush();
    }
}
