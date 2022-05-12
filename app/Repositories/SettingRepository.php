<?php

namespace App\Repositories;

use App\Models\{Setting, Reference};

class SettingRepository implements SettingRepositoryInterface
{
    public function updateSetting($data)
    {
        $setting = Setting::find($data['id']);
        $reference = Reference::where('id', $data['value'])->first();

        $setting->update([
            'key' => $data['key'],
            'value' => $data['value'],
            'expression' => $reference->expression
        ]);
    }
}
