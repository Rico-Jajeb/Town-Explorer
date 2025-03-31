<?php

namespace App\Services;

use App\Models\SettingsModel; //tapos adi an moddel

class SettingServices
{

    public function create(array $data)
    {
        //amo ini an code para pag insert han data tikang ha form tikadto database table
        return SettingsModel::create([
            'system_name' => $data['sysName'],
            'system_tagline' => $data['slogan'],
            'system_logo' => $data['sysLogo'],
            'system_favicon' => $data['sysFavicon'],
        ]);
    }

}
