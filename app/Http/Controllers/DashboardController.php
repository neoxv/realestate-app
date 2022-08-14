<?php

namespace App\Http\Controllers;

use App\Interfaces\AdvertisementServiceInterface;
use App\Interfaces\ClientServiceInterface;
use Illuminate\Http\Request;
use App\Interfaces\UserServiceInterface;
use App\Interfaces\OwnerServiceInterface;
use App\Interfaces\PropertyServiceInterface;
use App\Interfaces\SettingServiceInterface;

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
    private ClientServiceInterface $clientService;
    private AdvertisementServiceInterface $advertisementService;
    private SettingServiceInterface $settingService;

    public function __construct(PropertyServiceInterface $propertyService, UserServiceInterface $userService, OwnerServiceInterface $ownerService, ClientServiceInterface $clientService, AdvertisementServiceInterface $advertisementService, SettingServiceInterface $settingService)
    {
        $this->propertyService = $propertyService;
        $this->userService = $userService;
        $this->ownerService = $ownerService;
        $this->clientService = $clientService;
        $this->advertisementService = $advertisementService;
        $this->settingService = $settingService;
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
        return view('pages.admin.properties',['properties' => $this->propertyService->getAll(), 'ownersList' => $this->ownerService->get(['id', 'name','primary_phone']),'owners' => $this->ownerService->getAll(),'types' => $this->propertyService->getAllTypes()]);
    }

    public function userIndex()
    {
        return view('pages.admin.users',['users' => $this->userService->getAll()]);
    }

    public function advertisementIndex()
    {
        return view('pages.admin.advertisements',['featured' => $this->propertyService->getFeatured(5), 'advertisements'=>$this->advertisementService->getAll(),'clients'=> $this->clientService->getAll()]);
    }

    public function settingIndex()
    {
        return view('pages.admin.settings',['setting'=>$this->settingService->getAll()]);
    }

}
