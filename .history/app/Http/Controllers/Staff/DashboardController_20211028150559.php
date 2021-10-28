<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Render Dashboard
    // Renders the view of the dashboard landing.
    function renderDashboard()
    {
        return view('staff.dashboard');
    }

    // Render My Rota
    // Renders the view of a staff members rota
    function renderMyRota()
    {
        return view('staff.my-rota');
    }

    

    /*
        Management Routes
    */

    // Render all Staffs Rota View
    // Renders a view that shows succinctly every staff members rota.
    function renderStaffRota()
    {
        return view('staff.staff-rota');
    }

    // Render Staff List View
    // Renders a list of all staff members.
    function renderStaffList()
    {
        return view('staff.staff-list');
    }

    // Render Management 
    // Renders the management hub.
    function renderManagementHub()
    {
        return view('staff.management-hub');
    }
}
