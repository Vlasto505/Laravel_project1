<?php

namespace App\Http\Controllers;

use App\Services\TimeService;

class TimeRpcController extends Controller
{
    // Koristimo Dependency Injection za TimeService
    public function showTime(TimeService $timeService)
    {
        $vreme = $timeService->getCurrentTime();

        // Vraćamo čist tekst umesto JSON-a
        return response("Aktuálny čas je: " . $vreme);
    }
}
