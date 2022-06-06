<?php

namespace App\Entity\Mainboard;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Embeddable]
class DataConnectors
{
    #[ORM\Column(type: 'integer')]
    private int $ide;

    #[ORM\Column(type: 'integer')]
    private int $mSata;

    #[ORM\Column(type: 'integer')]
    private int $m2Sata;

    #[ORM\Column(type: 'integer')]
    private int $m2Nvme;

    #[ORM\Column(type: 'integer')]
    private int $sata;

    public function getIde(): int
    {
        return $this->ide;
    }

    public function setIde(int $ide): self
    {
        $this->ide = $ide;

        return $this;
    }

    public function getMSata(): int
    {
        return $this->mSata;
    }

    public function setMSata(int $mSata): self
    {
        $this->mSata = $mSata;

        return $this;
    }

    public function getM2Sata(): int
    {
        return $this->m2Sata;
    }

    public function setM2Sata(int $m2Sata): self
    {
        $this->m2Sata = $m2Sata;

        return $this;
    }

    public function getM2Nvme(): int
    {
        return $this->m2Nvme;
    }

    public function setM2Nvme(int $m2Nvme): self
    {
        $this->m2Nvme = $m2Nvme;

        return $this;
    }

    public function getSata(): int
    {
        return $this->sata;
    }

    public function setSata(int $sata): self
    {
        $this->sata = $sata;

        return $this;
    }
}
