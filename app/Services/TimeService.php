<?php

namespace App\Services;

class TimeService
{
    /**
     * Vraća trenutni datum i vreme u formatu Y-m-d H:i:s
     */
    public function getCurrentTime(): string
    {
        return date('Y-m-d H:i:s');
    }
}
