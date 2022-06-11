<?php

namespace App\Admin\Field\Configurator;

use App\Admin\Field\EnumField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Field\FieldConfiguratorInterface;
use EasyCorp\Bundle\EasyAdminBundle\Dto\EntityDto;
use EasyCorp\Bundle\EasyAdminBundle\Dto\FieldDto;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use function Symfony\Component\String\u;
use App\Enum\CaseFormFactor;
use App\Enum\MainboardFormFactor;
use App\Enum\RamFormFactor;
use App\Enum\RamType;
use App\Enum\Socket;
use App\Enum\Status;
use App\Enum\StorageType;

final class EnumConfigurator implements FieldConfiguratorInterface
{
    public function supports(FieldDto $field, EntityDto $entityDto): bool
    {
        return $field->getFieldFqcn() === EnumField::class;
    }

    public function configure(FieldDto $field, EntityDto $entityDto, AdminContext $context): void
    {
        if (null === $field->getValue()) {
            return;
        }

        $field->setFormattedValue($field->getValue()->name);
    }
}
