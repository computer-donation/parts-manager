<?php

namespace App\Enum;

enum RamSize: string {
    case Desktop = 'DIMM';
    case Laptop = 'SODIMM';
}
