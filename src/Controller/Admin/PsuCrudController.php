<?php

namespace App\Controller\Admin;

use App\Entity\Psu;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;

class PsuCrudController extends AbstractPartCrudController
{
    public static function getEntityFqcn(): string
    {
        return Psu::class;
    }

    public function configureFields(string $pageName): iterable
    {
        yield from parent::configureFields($pageName);
        yield from [
            IntegerField::new('maxPower'),
        ];
    }
}
