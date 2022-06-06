<?php

namespace App\Entity;

use App\Entity\Vga\DisplayPorts;
use App\Repository\VgaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VgaRepository::class)]
class Vga extends Part
{
    #[ORM\Column(type: 'integer')]
    private int $recommendedPsuWattage;

    #[ORM\Embedded(class: DisplayPorts::class)]
    private DisplayPorts $displayPorts;

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
}
