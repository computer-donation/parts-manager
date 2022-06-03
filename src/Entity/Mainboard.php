<?php

namespace App\Entity;

use App\Enum\CpuManufacturer;
use App\Enum\FormFactor;
use App\Enum\RamType;
use App\Repository\MainboardRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MainboardRepository::class)]
class Mainboard extends Part
{
    #[ORM\Column(type: 'string', length: 14)]
    private string $socket;

    #[ORM\Column(type: 'string', length: 4)]
    private string $chipset;

    #[ORM\Column(type: 'string', length: 5, enumType: CpuManufacturer::class)]
    private string $type;

    #[ORM\Column(type: 'string', length: 5, enumType: RamType::class)]
    private string $memoryType;

    #[ORM\Column(type: 'integer')]
    private int $memoryCap;

    public function getSocket(): ?string
    {
        return $this->socket;
    }

    public function setSocket(string $socket): self
    {
        $this->socket = $socket;

        return $this;
    }

    public function getChipset(): ?string
    {
        return $this->chipset;
    }

    public function setChipset(string $chipset): self
    {
        $this->chipset = $chipset;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getMemoryType(): ?string
    {
        return $this->memoryType;
    }

    public function setMemoryType(string $memoryType): self
    {
        $this->memoryType = $memoryType;

        return $this;
    }

    public function getMemoryCap(): ?int
    {
        return $this->memoryCap;
    }

    public function setMemoryCap(int $memoryCap): self
    {
        $this->memoryCap = $memoryCap;

        return $this;
    }
}
