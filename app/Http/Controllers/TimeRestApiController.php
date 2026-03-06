<?php

namespace App\Http\Controllers;

use App\Services\TimeService;
use Illuminate\Http\Response;

class TimeRestApiController extends Controller
{
    // Koristimo Dependency Injection za TimeService
    public function index(TimeService $timeService)
    {
        return response()->json([
            'current_time' => $timeService->getCurrentTime()
        ], Response::HTTP_OK);
    }
}
