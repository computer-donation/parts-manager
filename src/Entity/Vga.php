<?php

namespace App\Entity;

use App\Entity\Vga\DisplayPorts;
use App\Entity\Vga\PowerConnectors;
use App\Repository\VgaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VgaRepository::class)]
class Vga extends Part
{
    #[ORM\Column(type: 'integer')]
    private int $recommendedPsuWattage;

    #[ORM\Embedded(class: DisplayPorts::class)]
    private DisplayPorts $displayPorts;

    #[ORM\Embedded(class: PowerConnectors::class)]
    private PowerConnectors $powerConnectors;

    public function getRecommendedPsuWattage(): int
    {
        return $this->recommendedPsuWattage;
    }

    public function setRecommendedPsuWattage(int $recommendedPsuWattage): self
    {
        $this->recommendedPsuWattage = $recommendedPsuWattage;

        return $this;
    }

    public function getDisplayPorts(): DisplayPorts
    {
        return $this->displayPorts;
    }

    public function setDisplayPorts(DisplayPorts $displayPorts): self
    {
        $this->displayPorts = $displayPorts;

        return $this;
    }

    public function getPowerConnectors(): PowerConnectors
    {
        return $this->powerConnectors;
    }

    public function setPowerConnectors(PowerConnectors $powerConnectors): self
    {
        $this->powerConnectors = $powerConnectors;

        return $this;
    }
}
