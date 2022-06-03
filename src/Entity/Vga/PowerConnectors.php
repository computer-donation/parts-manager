<?php

namespace App\Entity\Vga;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Embeddable]
class PowerConnectors
{
    #[ORM\Column(type: 'integer')]
    private int $sixPin;

    #[ORM\Column(type: 'integer')]
    private int $eightPin;

    #[ORM\Column(type: 'integer')]
    private int $twelvePin;

    public function getSixPin(): int
    {
        return $this->sixPin;
    }

    public function setSixPin(int $sixPin): self
    {
        $this->sixPin = $sixPin;

        return $this;
    }

    public function getEightPin(): int
    {
        return $this->eightPin;
    }

    public function setEightPin(int $eightPin): self
    {
        $this->eightPin = $eightPin;

        return $this;
    }

    public function getTwelvePin(): int
    {
        return $this->twelvePin;
    }

    public function setTwelvePin(int $twelvePin): self
    {
        $this->twelvePin = $twelvePin;

        return $this;
    }
}
