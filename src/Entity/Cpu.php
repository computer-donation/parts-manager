<?php

namespace App\Entity;

use App\Repository\CPURepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CPURepository::class)]
class Cpu extends Part
{
    #[ORM\Column(type: 'string', length: 14)]
    private string $socket;

    public function getSocket(): string
    {
        return $this->socket;
    }

    public function setSocket(string $socket): self
    {
        $this->socket = $socket;

        return $this;
    }
}
