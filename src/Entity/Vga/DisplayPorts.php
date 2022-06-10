<?php

namespace App\Entity\Vga;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Embeddable]
class DisplayPorts
{
    #[ORM\Column(type: 'integer')]
    private int $vga = 0;

    #[ORM\Column(type: 'integer')]
    private int $dvi = 0;

    #[ORM\Column(type: 'integer')]
    private int $hdmi = 0;

    #[ORM\Column(type: 'integer')]
    private int $miniHdmi = 0;

    #[ORM\Column(type: 'integer')]
    private int $displayPort = 0;

    #[ORM\Column(type: 'integer')]
    private int $miniDisplayPort = 0;

    #[ORM\Column(type: 'integer')]
    private int $usbTypeC = 0;

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

    public function getMiniHdmi(): int
    {
        return $this->miniHdmi;
    }

    public function setMiniHdmi(int $miniHdmi): self
    {
        $this->miniHdmi = $miniHdmi;

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

    public function getMiniDisplayPort(): int
    {
        return $this->miniDisplayPort;
    }

    public function setMiniDisplayPort(int $miniDisplayPort): self
    {
        $this->miniDisplayPort = $miniDisplayPort;

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
