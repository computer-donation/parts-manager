<?php

namespace App\Enum;

enum MainboardFormFactor: string {
    case miniItx = 'Mini-ITX';
    case microAtx = 'Micro-ATX';
    case atx = 'ATX';
    case eAtx = 'EATX';
}
