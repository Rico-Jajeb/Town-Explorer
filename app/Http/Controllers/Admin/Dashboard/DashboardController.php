<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    
    public function index(){
        // This handles the rendering for the dashboard

        return Inertia::render('Admin/Dashboard/Dashboard');
    }

    public function UserPage(){
        //INI NA CODE IS PARA HA PAGKADTO HA USER HOME PAGE 
        //KAY PARA MADAGMIT PAG DEVELOP
        return Inertia::render('User/Main/MainPage');
    }
}
