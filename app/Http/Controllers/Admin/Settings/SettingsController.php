<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SettingsController extends Controller
{
    public function index(){
        return Inertia::render('Admin/Settings/GeneralSettings');
    }

    public function showHomeSettings(){
        return Inertia::render('Admin/Settings/HomeSettings');
    }
}
