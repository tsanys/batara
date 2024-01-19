<?php

namespace App\Http\Controllers\Admin;

use App\Charts\MemberTypeCountChart;
use App\Http\Controllers\Controller;
use App\Models\User;

class DashboardController extends Controller
{
    public function index(MemberTypeCountChart $chart)
    {
        $members = User::where('role', 'member')->with('address:user_id,latitude,longitude,current_regency,current_subdistric')->select('id', 'nik', 'phone', 'fullname', 'remember_token')->get();
        $memberCount = User::where('role', 'member')->count();
        $chart = $chart->build();

        return view('dashboard.index', compact('members', 'memberCount', 'chart'));
    }
}
