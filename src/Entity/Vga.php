<?php

namespace App\Entity;

use App\Entity\Vga\DisplayPorts;
use App\Repository\VgaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VgaRepository::class)]
class Vga extends Part
{
    #[ORM\Column(type: 'integer')]
    private int $suggestedPsu;

    #[ORM\Embedded(class: DisplayPorts::class)]
    private DisplayPorts $displayPorts;

    public function getSuggestedPsu(): int
    {
        return $this->suggestedPsu;
    }

    public function setSuggestedPsu(int $suggestedPsu): self
    {
        $this->suggestedPsu = $suggestedPsu;

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
