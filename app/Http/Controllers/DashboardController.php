<?php

namespace App\Http\Controllers;

use App\Constants;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $admin = auth()->user();
        $url = '/';
        return view('admin.dashboard', compact(['admin', 'url']));
    }
}
