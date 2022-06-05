<?php

namespace App\Enum;

enum Socket: string {
    case AM4 = 'AM4';
    case FM2PLUS = 'FM2+';
    case AM1 = 'AM1';
    case FM2 = 'FM2';
    case AM3PLUS = 'AM3+';
    case FM1 = 'FM1';
    case AM3 = 'AM3';
    case LGA775 = 'LGA775';
    case LGA1155 = 'LGA1155';
    case LGA1150 = 'LGA1150';
    case LGA1151 = 'LGA1151';
    case PGA988 = 'PGA988';
    case LGA1156 = 'LGA1156';
    case LGA1200 = 'LGA1200';
}
