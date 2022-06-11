<?php

namespace App\Controller\Admin;

use App\Admin\Field\EnumField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

abstract class AbstractPartCrudController extends AbstractCrudController
{
    public function configureFields(string $pageName): iterable
    {
        return [
            'id',
            'name',
            EnumField::new('status'),
        ];
    }
}
