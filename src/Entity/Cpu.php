<?php

namespace App\Entity;

use App\Enum\CpuManufacturer;
use App\Repository\CPURepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CPURepository::class)]
class Cpu extends Part
{
    #[ORM\Column(type: 'string', length: 5, enumType: CpuManufacturer::class)]
    private string $manufacturer;

    #[ORM\Column(type: 'string', length: 14)]
    private string $socket;

    public function getManufacturer(): ?string
    {
        return $this->manufacturer;
    }

    public function setManufacturer(string $manufacturer): self
    {
        $this->manufacturer = $manufacturer;

        return $this;
    }

    public function getSocket(): ?string
    {
        return $this->socket;
    }

    public function setSocket(string $socket): self
    {
        $this->socket = $socket;

        return $this;
    }
}
