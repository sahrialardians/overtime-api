<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SettingRequest;
use App\Services\SettingServiceInterface;

class SettingController extends Controller
{
    protected $settingService;

    public function __construct(SettingServiceInterface $settingServiceInterface)
    {
        $this->settingService = $settingServiceInterface;
    }

    public function update(SettingRequest $request)
    {    
        return $this->settingService->updateSetting($request->validated());
    }
}
