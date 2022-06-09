<?php

namespace App\Entity;

use App\Enum\RamFormFactor;
use App\Enum\RamType;
use App\Repository\RamRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RamRepository::class)]
class Ram extends Part
{
    #[ORM\Column(type: 'string', length: 6, enumType: RamFormFactor::class)]
    private RamFormFactor $formFactor;

    #[ORM\Column(type: 'string', length: 5, enumType: RamType::class)]
    private RamType $type;

    #[ORM\Column(type: 'integer')]
    private int $size;

    public function getFormFactor(): RamFormFactor
    {
        return $this->formFactor;
    }

    public function setFormFactor(RamFormFactor $formFactor): self
    {
        $this->formFactor = $formFactor;

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
