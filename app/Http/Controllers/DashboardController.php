<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\UserServiceInterface;
use App\Interfaces\OwnerServiceInterface;
use App\Interfaces\PropertyServiceInterface;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private PropertyServiceInterface $propertyService;
    private UserServiceInterface $userService;
    private OwnerServiceInterface $ownerService;

    public function __construct(PropertyServiceInterface $propertyService, UserServiceInterface $userService, OwnerServiceInterface $ownerService)
    {
        $this->propertyService = $propertyService;
        $this->userService = $userService;
        $this->ownerService = $ownerService;
    }

    public function index()
    {
        $propertyCount = $this->propertyService->getPropertyReportForDashboard();
        $userCount = $this->userService->getUserCountByMonth(6);
        $totalTransaction = 0;
        $totalSale = 0;
        $totalRental = 0;
        $total_user = 0;
        foreach ($propertyCount as $key => $value) {
            $totalTransaction += $value->sold_count;
            $totalSale += $value->sale_count;
            $totalRental += $value->rental_count;
        }
        foreach($userCount as $key => $value){
            $total_user += $value->count;
        }
        return view('pages.admin.dashboard', [
            'report' => $propertyCount,
            'total_sale'=>$totalSale,
            'total_rental'=>$totalRental,
            'total_transaction'=>$totalTransaction,
            'total_user'=>$total_user,
            'user_count' => $userCount
        ]);
        // dd($report);
    }

    public function propertyIndex()
    {
        return view('pages.admin.properties',['properties' => $this->propertyService->getAll(), 'ownersList' => $this->ownerService->getOwnersForCreate(),'owners' => $this->ownerService->getAll(),'types' => $this->propertyService->getAllTypes()]);
    }

    public function userIndex()
    {
        return view('pages.admin.users',['users' => $this->userService->getAll()]);
    }

    public function advertisementIndex()
    {
        return view('pages.admin.advertisements');
    }

    public function settingIndex()
    {
        return view('pages.admin.settings');
    }

}
