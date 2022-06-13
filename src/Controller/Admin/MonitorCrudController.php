<?php

namespace App\Controller\Admin;

use App\Admin\Field\DisplayPortsField;
use App\Entity\Monitor;

class MonitorCrudController extends AbstractPartCrudController
{
    public static function getEntityFqcn(): string
    {
        return Monitor::class;
    }

    public function configureFields(string $pageName): iterable
    {
        yield from parent::configureFields($pageName);
        yield from [
            DisplayPortsField::new('ports'),
        ];
    }
}
