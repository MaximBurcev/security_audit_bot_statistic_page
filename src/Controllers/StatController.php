<?php

namespace Max\SecurityAuditBot\Controllers;


use App\Service\DataService;
use Illuminate\Support\Facades\View;

class StatController
{
    private $dataService;

    public function __construct(DataService $dataService)
    {
        $this->dataService = $dataService;
    }

    public function index()
    {
        $dashboardData = $this->dataService->getDashboardData();

        return View::make('views::stat', $dashboardData);
    }
}
