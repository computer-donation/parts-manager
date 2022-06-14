<?php

namespace App\Entity;

use App\Enum\Status;
use Doctrine\ORM\Mapping as ORM;

#[ORM\MappedSuperclass]
class Part
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private readonly int $id;

    #[ORM\Column(type: 'string', length: 255)]
    private string $name;

    #[ORM\Column(type: 'string', length: 7, enumType: Status::class)]
    private Status $status = Status::Unknown;

    #[ORM\Column(type: 'string', length: 36, nullable: true)]
    private ?string $donor = null;

    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $computer = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function isStatus(): Status
    {
        return $this->status;
    }

    public function setStatus(Status $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getDonor(): ?string
    {
        return $this->donor;
    }

    public function setDonor(?string $donor): self
    {
        $this->donor = $donor;

        return $this;
    }

    public function getComputer(): ?int
    {
        return $this->computer;
    }

    public function setComputer(?int $computer): self
    {
        $this->computer = $computer;

        return $this;
    }
}
