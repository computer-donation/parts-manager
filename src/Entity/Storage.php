<?php

namespace App\Entity;

use App\Enum\StorageType;
use App\Repository\StorageRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StorageRepository::class)]
class Storage extends Part
{
    #[ORM\Column(type: 'boolean')]
    private bool $formatted;

    #[ORM\Column(type: 'string', length: 8, enumType: StorageType::class)]
    private StorageType $type;

    public function isFormatted(): bool
    {
        return $this->formatted;
    }

    public function setFormatted(bool $formatted): self
    {
        $this->formatted = $formatted;

        return $this;
    }

    public function getType(): StorageType
    {
        return $this->type;
    }

    public function setType(StorageType $type): self
    {
        $this->type = $type;

        return $this;
    }
}
