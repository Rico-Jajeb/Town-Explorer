<?php

namespace App\Services;

use App\Models\SettingsModel;

class SettingServices
{

    public function create(array $data)
    {

        return SettingsModel::create([
            'system_name' => $data['name'],
            'system_tagline' => $data['description'],
            'system_logo' => $data['img'],
            'system_favicon' => $data['links'],
        ]);
        //Amo ini an code para han pag insert ngadto ha database table 'Project'
    }

}
