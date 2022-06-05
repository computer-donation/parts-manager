<?php

namespace App\Entity;

use App\Enum\FormFactor;
use App\Enum\RamType;
use App\Enum\Socket;
use App\Repository\MainboardRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MainboardRepository::class)]
class Mainboard extends Part
{
    #[ORM\Column(type: 'string', length: 14, enumType: Socket::class)]
    private Socket $socket;

    #[ORM\Column(type: 'string', length: 5, enumType: RamType::class)]
    private RamType $memoryType;

    #[ORM\Column(type: 'integer')]
    private int $memoryCap;

    #[ORM\Column(type: 'string', length: 8, enumType: FormFactor::class)]
    private FormFactor $size;

    public function getSocket(): Socket
    {
        return $this->socket;
    }

    public function setSocket(Socket $socket): self
    {
        $this->socket = $socket;

        return $this;
    }

    public function getMemoryType(): RamType
    {
        return $this->memoryType;
    }

    public function setMemoryType(RamType $memoryType): self
    {
        $this->memoryType = $memoryType;

        return $this;
    }

    public function getMemoryCap(): int
    {
        return $this->memoryCap;
    }

    public function setMemoryCap(int $memoryCap): self
    {
        $this->memoryCap = $memoryCap;

        return $this;
    }

    public function getSize(): FormFactor
    {
        return $this->size;
    }

    public function setSize(FormFactor $size): self
    {
        $this->size = $size;

        return $this;
    }
}
