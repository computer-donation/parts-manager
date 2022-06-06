<?php

namespace App\Entity;

use App\Repository\PsuRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PsuRepository::class)]
class Psu extends Part
{
    #[ORM\Column(type: 'integer')]
    private int $maxPower;

    public function getMaxPower(): int
    {
        return $this->maxPower;
    }

    public function setMaxPower(int $maxPower): self
    {
        $this->maxPower = $maxPower;

        return $this;
    }
}
