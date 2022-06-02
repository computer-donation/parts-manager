<?php

namespace App\Entity\Psu;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Embeddable]
class Connectors
{
    #[ORM\Column(type: 'integer')]
    private int $atxMainboardPower = 1;

    #[ORM\Column(type: 'integer')]
    private int $cpuPower = 1;

    #[ORM\Column(type: 'integer')]
    private int $vgaPower;

    #[ORM\Column(type: 'integer')]
    private int $molex;

    #[ORM\Column(type: 'integer')]
    private int $sataPower;

    #[ORM\Column(type: 'integer')]
    private int $floppyPower = 0;

    public function getAtxMainboardPower(): ?int
    {
        return $this->atxMainboardPower;
    }

    public function setAtxMainboardPower(int $atxMainboardPower): self
    {
        $this->atxMainboardPower = $atxMainboardPower;

        return $this;
    }

    public function getCpuPower(): ?int
    {
        return $this->cpuPower;
    }

    public function setCpuPower(int $cpuPower): self
    {
        $this->cpuPower = $cpuPower;

        return $this;
    }

    public function getVgaPower(): ?int
    {
        return $this->vgaPower;
    }

    public function setVgaPower(int $vgaPower): self
    {
        $this->vgaPower = $vgaPower;

        return $this;
    }

    public function getMolex(): ?int
    {
        return $this->molex;
    }

    public function setMolex(int $molex): self
    {
        $this->molex = $molex;

        return $this;
    }

    public function getSataPower(): ?int
    {
        return $this->sataPower;
    }

    public function setSataPower(int $sataPower): self
    {
        $this->sataPower = $sataPower;

        return $this;
    }

    public function getFloppyPower(): ?int
    {
        return $this->floppyPower;
    }

    public function setFloppyPower(int $floppyPower): self
    {
        $this->floppyPower = $floppyPower;

        return $this;
    }
}
