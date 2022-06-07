<?php

namespace App\Enum;

enum MainboardFormFactor: string {
    case miniItx = 'Mini-ITX';
    case microAtx = 'MicroATX';
    case atx = 'ATX';
    case eAtx = 'EATX';
}
