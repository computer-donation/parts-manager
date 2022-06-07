<?php

namespace App\Entity\Mainboard;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Embeddable]
class DataConnectors
{
    #[ORM\Column(type: 'integer')]
    private int $ide = 0;

    #[ORM\Column(type: 'integer')]
    private int $mSata = 0;

    #[ORM\Column(type: 'integer')]
    private int $m2 = 0;

    #[ORM\Column(type: 'integer')]
    private int $sata = 0;

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

    public function getM2(): int
    {
        return $this->m2;
    }

    public function setM2(int $m2): self
    {
        $this->m2 = $m2;

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
