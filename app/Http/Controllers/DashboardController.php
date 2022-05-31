<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\PropertyServiceInterface;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(PropertyServiceInterface $propertyService)
    {
        $this->propertyService = $propertyService;
    }

    public function index()
    {
        // $userCount = $this->propertyService->getUserCountByMonth(6);
        $propertyCount= $this->propertyService->getPropertyCountForDashboard();
        dd($propertyCount);
    }

}
