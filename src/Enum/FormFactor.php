<?php

namespace App\Enum;

enum FormFactor: string {
    case smallFormFactor = 'Mini-ITX';
    case miniTower = 'MicroATX';
    case midTower = 'ATX';
    case fullTower = 'EATX';
}
