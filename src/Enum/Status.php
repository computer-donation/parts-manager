<?php

namespace App\Enum;

enum Status: int {
    case Unknown = -1;
    case Working = 1;
    case Broken = 0;
}
