<?php

namespace App\Entity;

use App\Entity\Vga\DisplayPorts;
use App\Repository\MonitorRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MonitorRepository::class)]
class Monitor extends Part
{
    #[ORM\Embedded(class: DisplayPorts::class)]
    private DisplayPorts $ports;

    public function getPorts(): DisplayPorts
    {
        return $this->ports;
    }

    public function setPorts(DisplayPorts $ports): self
    {
        $this->ports = $ports;

        return $this;
    }
}
