<?php

namespace App\Http\Controllers;

use App\Interfaces\PropertyServiceInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private PropertyServiceInterface $propertyService;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(PropertyServiceInterface $propertyService)
    {
        $this->propertyService = $propertyService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show()
    {
        $featured = $this->propertyService->getFeatured();
        $recent = $this->propertyService->getRecent();
        return view('pages.home-page',['featured'=>$featured,'recent'=>$recent]);
    }

}
