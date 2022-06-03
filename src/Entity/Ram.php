<?php

namespace App\Entity;

use App\Enum\RamSize;
use App\Enum\RamType;
use App\Repository\RamRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RamRepository::class)]
class Ram extends Part
{
    #[ORM\Column(type: 'integer')]
    private int $speed;

    #[ORM\Column(type: 'string', length: 6, enumType: RamSize::class)]
    private string $size;

    #[ORM\Column(type: 'string', length: 5, enumType: RamType::class)]
    private string $type;

    public function getSpeed(): int
    {
        return $this->speed;
    }

    public function setSpeed(int $speed): self
    {
        $this->speed = $speed;

        return $this;
    }

    public function getSize(): string
    {
        return $this->size;
    }

    public function setSize(string $size): self
    {
        $this->size = $size;

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
