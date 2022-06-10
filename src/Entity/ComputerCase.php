<?php

namespace App\Entity;

use App\Enum\CaseFormFactor;
use App\Repository\ComputerCaseRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ComputerCaseRepository::class)]
class ComputerCase extends Part
{
    #[ORM\Column(type: 'string', length: 8, enumType: CaseFormFactor::class)]
    private CaseFormFactor $formFactor;

    public function getFormFactor(): CaseFormFactor
    {
        return $this->formFactor;
    }

    public function setFormFactor(CaseFormFactor $formFactor): self
    {
        $this->formFactor = $formFactor;

        return $this;
    }
}
