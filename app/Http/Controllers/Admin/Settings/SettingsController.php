<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

use App\Http\Requests\SettingRequest;

use App\Services\SettingServices;
use App\Models\SettingsModel;

class SettingsController extends Controller
{

    protected $SettingServices;

    public function __construct(SettingServices $SettingServices)
    {
        $this->SettingServices = $SettingServices;
    }
    

    public function index(){
        return Inertia::render('Admin/Settings/GeneralSettings');
    }

    public function showHomeSettings(){
        return Inertia::render('Admin/Settings/HomeSettings');
    }

    public function updateGeneralSettings(SettingRequest $request){
        $validated = $request->validated();
        $this->SettingServices->create($validated); //bali an code para han create aadto ha services
        return redirect()->back()->with('success', "");
    }

    public function updateHomeSettings(){

    }
}
