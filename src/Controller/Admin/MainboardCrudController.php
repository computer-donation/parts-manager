<?php

namespace App\Controller\Admin;

use App\Admin\Field\EnumField;
use App\Entity\Mainboard;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;

class MainboardCrudController extends AbstractPartCrudController
{
    public static function getEntityFqcn(): string
    {
        return Mainboard::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return array_merge(parent::configureFields($pageName), [
            EnumField::new('socket'),
            EnumField::new('memoryType'),
            EnumField::new('memoryFormFactor'),
            'memoryCap',
            EnumField::new('formFactor'),
            'integratedGraphics',
            ArrayField::new('displayPorts'),
            'dataConnectors',
        ]);
    }
}
