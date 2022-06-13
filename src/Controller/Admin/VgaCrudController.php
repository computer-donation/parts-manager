<?php

namespace App\Controller\Admin;

use App\Admin\Field\DisplayPortsField;
use App\Entity\Vga;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;

class VgaCrudController extends AbstractPartCrudController
{
    public static function getEntityFqcn(): string
    {
        return Vga::class;
    }

    public function configureFields(string $pageName): iterable
    {
        yield from parent::configureFields($pageName);
        yield from [
            IntegerField::new('suggestedPsu'),
            DisplayPortsField::new('displayPorts'),
        ];
    }
}
