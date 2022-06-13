<?php

namespace App\Enum;

enum Status: string {
    case Unknown = 'Unknown';
    case Working = 'Working';
    case Broken = 'Broken';
}
