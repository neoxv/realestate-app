<?php

namespace App\Http\Controllers;

use App\Interfaces\SettingServiceInterface;
use App\Services\SettingService;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    private SettingServiceInterface $settingService;

    public function __construct(SettingService $settingService)
    {
        $this->settingService = $settingService;
    }

    public function index()
    {
        return view('pages.contact',['setting'=>$this->settingService->getAll()]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

}
