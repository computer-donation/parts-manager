<?php

namespace App\Admin\Field;

use App\Entity\Vga\DisplayPorts;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Field\FieldInterface;
use EasyCorp\Bundle\EasyAdminBundle\Field\FieldTrait;
use Symfony\Contracts\Translation\TranslatableInterface;

final class DisplayPortsField implements FieldInterface
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
            ->setTemplatePath('admin/field/ports.html.twig')
            ->formatValue(function (DisplayPorts $displayPorts): string {
                $values = [];
                $ports = [
                    'vga' => 'VGA',
                    'dvi' => 'DVI',
                    'hdmi' => 'HDMI',
                    'miniHdmi' => 'Mini HDMI',
                    'displayPort' => 'Display Port',
                    'miniDisplayPort' => 'Mini Display Port',
                    'usbTypeC' => 'USB-C',
                ];
                foreach ($ports as $property => $name) {
                    $count = call_user_func([$displayPorts, 'get' . ucfirst($property)]);
                    if ($count > 0) {
                        $values[] = sprintf('%sX %s', $count, $name);
                    }
                }

                return implode(' ', $values);
            });
    }
}
