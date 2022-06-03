<?php

namespace App\Entity\Vga;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Embeddable]
class DisplayPorts
{
    #[ORM\Column(type: 'integer')]
    private int $vga;

    #[ORM\Column(type: 'integer')]
    private int $dvi;

    #[ORM\Column(type: 'integer')]
    private int $hdmi;

    #[ORM\Column(type: 'integer')]
    private int $displayPort;

    #[ORM\Column(type: 'integer')]
    private int $usbTypeC;

    public function getVga(): int
    {
        return $this->vga;
    }

    public function setVga(int $vga): self
    {
        $this->vga = $vga;

        return $this;
    }

    public function getDvi(): int
    {
        return $this->dvi;
    }

    public function setDvi(int $dvi): self
    {
        $this->dvi = $dvi;

        return $this;
    }

    public function getHdmi(): int
    {
        return $this->hdmi;
    }

    public function setHdmi(int $hdmi): self
    {
        $this->hdmi = $hdmi;

        return $this;
    }

    public function getDisplayPort(): int
    {
        return $this->displayPort;
    }

    public function setDisplayPort(int $displayPort): self
    {
        $this->displayPort = $displayPort;

        return $this;
    }

    public function getUsbTypeC(): int
    {
        return $this->usbTypeC;
    }

    public function setUsbTypeC(int $usbTypeC): self
    {
        $this->usbTypeC = $usbTypeC;

        return $this;
    }
}
