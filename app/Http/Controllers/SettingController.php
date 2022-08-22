<?php

namespace App\Http\Controllers;

use App\Interfaces\SettingServiceInterface;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    private SettingServiceInterface $settingService;

    public function __construct(SettingServiceInterface $settingService)
    {
       $this->settingService = $settingService;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        config(['app.name' => $request->input('app_name')]);
        if (isset($request['document'])) {
            $setting = Setting::with('documents')->where('id', $request->id)->first();
            if($setting){
                $documents = $setting->documents;
                foreach ($documents as $document) {
                    $this->documentService->destroy($document->filename, 'img/settings');
                }
            }
        }
        $response = $this->settingService->create($request->all());
        if ($response->success) {
            return redirect()->route('admin.settings')->with('success', $response->message);
        }
        return redirect()->route('admin.settings')->with('error', $response->message);
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
