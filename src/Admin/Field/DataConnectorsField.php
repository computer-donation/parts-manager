<?php

namespace App\Admin\Field;

use App\Entity\Mainboard\DataConnectors;
use App\Entity\Vga\DisplayPorts;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Field\FieldInterface;
use EasyCorp\Bundle\EasyAdminBundle\Field\FieldTrait;
use Symfony\Contracts\Translation\TranslatableInterface;

final class DataConnectorsField implements FieldInterface
{
    use FieldTrait;

    /**
     * @param TranslatableInterface|string|false|null $label
     */
    public static function new(string $propertyName, $label = null): self
    {
        return (new self())
            ->setProperty($propertyName)
            ->setLabel($label)
            ->setTemplatePath('admin/field/connectors.html.twig')
            ->formatValue(function (DataConnectors $dataConnectors): string {
                $values = [];
                $ports = [
                    'ide' => 'IDE',
                    'mSata' => 'm.SATA',
                    'm2' => 'm.2',
                    'sata' => 'SATA',
                ];
                foreach ($ports as $property => $name) {
                    $count = call_user_func([$dataConnectors, 'get' . ucfirst($property)]);
                    if ($count > 0) {
                        $values[] = sprintf('%sX %s', $count, $name);
                    }
                }

                return implode(' ', $values);
            });
    }
}
