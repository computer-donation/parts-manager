<?php

namespace App\Controller\Admin;

use App\Admin\Field\EnumField;
use App\Entity\Ram;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;

class RamCrudController extends AbstractPartCrudController
{
    public static function getEntityFqcn(): string
    {
        return Ram::class;
    }

    public function configureFields(string $pageName): iterable
    {
        yield from parent::configureFields($pageName);
        yield from [
            EnumField::new('formFactor'),
            EnumField::new('type'),
            IntegerField::new('size'),
        ];
    }
}
