<?php

namespace App\Services;

use App\Repositories\SettingRepositoryInterface;

class SettingService implements SettingServiceInterface
{
    protected $overtimeRepository;

    public function __construct(SettingRepositoryInterface $settingServiceInterface)
    {
        $this->settingRepository = $settingServiceInterface;
    }

    public function updateSetting($data)
    {
        try {
            $this->settingRepository->updateSetting($data);

            return response()->json([
                'code' => 200,
                'status' => true,
                'message' => 'Succesfully updated setting.'
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'code' => 500,
                'status' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
