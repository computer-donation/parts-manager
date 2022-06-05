<?php

namespace App\Entity;

use App\Enum\FormFactor;
use App\Repository\ComputerCaseRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ComputerCaseRepository::class)]
class ComputerCase extends Part
{
    #[ORM\Column(type: 'string', length: 8, enumType: FormFactor::class)]
    private FormFactor $size;

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
