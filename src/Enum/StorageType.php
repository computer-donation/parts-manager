<?php

namespace App\Enum;

enum StorageType: string {
    case IDE = 'ide';
    case mSATA = 'mSATA';
    case m2SATA = 'm.2 SATA';
    case m2NVMe = 'm.2 NVMe';
    case sata = 'SATA';
}
