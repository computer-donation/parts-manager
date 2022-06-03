<?php

namespace App\Entity;

use App\Entity\Psu\Connectors;
use App\Repository\PsuRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PsuRepository::class)]
class Psu extends Part
{
    #[ORM\Column(type: 'integer')]
    private int $maxPower;

    #[ORM\Embedded(class: Connectors::class)]
    private Connectors $connectors;

    public function getMaxPower(): int
    {
        return $this->maxPower;
    }

    public function setMaxPower(int $maxPower): self
    {
        $this->maxPower = $maxPower;

        return $this;
    }

    public function getConnectors(): Connectors
    {
        return $this->connectors;
    }

    public function setConnectors(Connectors $connectors): self
    {
        $this->connectors = $connectors;

        return $this;
    }
}
