<?php

namespace App\Http\Controllers;

use App\Interfaces\AdvertisementServiceInterface;
use App\Interfaces\PropertyServiceInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private PropertyServiceInterface $propertyService;
    private AdvertisementServiceInterface $advertisementService;

    public function __construct(PropertyServiceInterface $propertyService, AdvertisementServiceInterface $advertisementService )
    {
        $this->propertyService = $propertyService;
        $this->advertisementService = $advertisementService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show()
    {
        $featured = $this->propertyService->getFeatured(null,true);
        $count = 6 - count($featured);
        if($count > 0){
            $recent = $this->propertyService->getRecent($count);
        }else{
            $recent = [];
        }
        $sale = $this->propertyService->getByAttribute('is_rental', false, ['documents', 'users'], 6,true);
        $rent = $this->propertyService->getByAttribute('is_rental', true, ['documents', 'users'], 6,true);
        $ads = $this->advertisementService->getActiveAdvertisements();
        return view('pages.home-page',['featured'=>$featured,'recent'=>$recent,'ads'=> $ads,'sale'=>$sale,'rent'=>$rent]);
    }

}
