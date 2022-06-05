<?php

namespace App\Entity;

use App\Enum\RamOutline;
use App\Enum\RamType;
use App\Repository\RamRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RamRepository::class)]
class Ram extends Part
{
    #[ORM\Column(type: 'integer')]
    private int $speed;

    #[ORM\Column(type: 'string', length: 6, enumType: RamOutline::class)]
    private RamOutline $outline;

    #[ORM\Column(type: 'string', length: 5, enumType: RamType::class)]
    private RamType $type;

    #[ORM\Column(type: 'integer')]
    private int $size;

    public function getSpeed(): int
    {
        return $this->speed;
    }

    public function setSpeed(int $speed): self
    {
        $this->speed = $speed;

        return $this;
    }

    public function getOutline(): RamOutline
    {
        return $this->outline;
    }

    public function setOutline(RamOutline $outline): self
    {
        $this->outline = $outline;

        return $this;
    }

    public function getType(): RamType
    {
        return $this->type;
    }

    public function setType(RamType $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getSize(): ?int
    {
        return $this->size;
    }

    public function setSize(int $size): self
    {
        $this->size = $size;

        return $this;
    }
}
