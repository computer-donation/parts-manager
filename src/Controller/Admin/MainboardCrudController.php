<?php

namespace App\Controller\Admin;

use App\Admin\Field\DataConnectorsField;
use App\Admin\Field\DisplayPortsField;
use App\Admin\Field\EnumField;
use App\Entity\Mainboard;

class MainboardCrudController extends AbstractPartCrudController
{
    public static function getEntityFqcn(): string
    {
        return Mainboard::class;
    }

    public function configureFields(string $pageName): iterable
    {
        yield from parent::configureFields($pageName);
        yield from [
            EnumField::new('socket'),
            EnumField::new('memoryType'),
            EnumField::new('memoryFormFactor'),
            'memoryCap',
            EnumField::new('formFactor'),
            'integratedGraphics',
            DisplayPortsField::new('displayPorts'),
            DataConnectorsField::new('dataConnectors'),
        ];
    }
}
