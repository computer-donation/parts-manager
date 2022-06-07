<?php

namespace App\Entity;

use App\Enum\Socket;
use App\Repository\CPURepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CPURepository::class)]
class Cpu extends Part
{
    #[ORM\Column(type: 'string', length: 14, enumType: Socket::class)]
    private Socket $socket;

    #[ORM\Column(type: 'integer')]
    private int $powerConsumption;

    #[ORM\Column(type: 'boolean')]
    private bool $integratedGraphics;

    public function getSocket(): Socket
    {
        return $this->socket;
    }

    public function setSocket(Socket $socket): self
    {
        $this->socket = $socket;

        return $this;
    }

    public function getPowerConsumption(): int
    {
        return $this->powerConsumption;
    }

    public function setPowerConsumption(int $powerConsumption): self
    {
        $this->powerConsumption = $powerConsumption;

        return $this;
    }

    public function hasIntegratedGraphics(): bool
    {
        return $this->integratedGraphics;
    }

    public function setIntegratedGraphics(bool $integratedGraphics): self
    {
        $this->integratedGraphics = $integratedGraphics;

        return $this;
    }
}
