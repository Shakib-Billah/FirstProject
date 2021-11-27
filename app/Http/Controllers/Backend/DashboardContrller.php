<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardContrller extends Controller
{
    public function Dashboard(){
        return view('backend.dashboard');
    }
}
