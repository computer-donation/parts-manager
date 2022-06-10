<?php

namespace App\Entity;

use App\Entity\Mainboard\DataConnectors;
use App\Entity\Vga\DisplayPorts;
use App\Enum\MainboardFormFactor;
use App\Enum\RamFormFactor;
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

    #[ORM\Column(type: 'string', length: 6, enumType: RamFormFactor::class)]
    private RamFormFactor $memoryFormFactor;

    #[ORM\Column(type: 'integer')]
    private int $memoryCap;

    #[ORM\Column(type: 'string', length: 9, enumType: MainboardFormFactor::class)]
    private MainboardFormFactor $formFactor;

    #[ORM\Column(type: 'boolean')]
    private bool $integratedGraphics;

    #[ORM\Embedded(class: DisplayPorts::class)]
    private DisplayPorts $displayPorts;

    #[ORM\Embedded(class: DataConnectors::class)]
    private DataConnectors $dataConnectors;

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

    public function getMemoryFormFactor(): RamFormFactor
    {
        return $this->memoryFormFactor;
    }

    public function setMemoryFormFactor(RamFormFactor $memoryFormFactor): self
    {
        $this->memoryFormFactor = $memoryFormFactor;

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

    public function getFormFactor(): MainboardFormFactor
    {
        return $this->formFactor;
    }

    public function setFormFactor(MainboardFormFactor $formFactor): self
    {
        $this->formFactor = $formFactor;

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

    public function getDisplayPorts(): DisplayPorts
    {
        return $this->displayPorts;
    }

    public function setDisplayPorts(DisplayPorts $displayPorts): self
    {
        $this->displayPorts = $displayPorts;

        return $this;
    }

    public function getDataConnectors(): DataConnectors
    {
        return $this->dataConnectors;
    }

    public function setDataConnectors(DataConnectors $dataConnectors): self
    {
        $this->dataConnectors = $dataConnectors;

        return $this;
    }
}
