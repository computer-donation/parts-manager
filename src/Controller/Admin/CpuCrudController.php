<?php

namespace App\Controller\Admin;

use App\Admin\Field\EnumField;
use App\Entity\Cpu;

class CpuCrudController extends AbstractPartCrudController
{
    public static function getEntityFqcn(): string
    {
        return Cpu::class;
    }

    public function configureFields(string $pageName): iterable
    {
        yield from parent::configureFields($pageName);
        yield from [
            EnumField::new('socket'),
            'tdp',
            'integratedGraphics',
        ];
    }
}
