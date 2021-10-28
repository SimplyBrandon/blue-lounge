<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    // Render Account Settings Page
    // Renders the account settings page for staff members to change their details.
    function renderAccountSettings()
    {
        return view('staff.settings.account-settings');
    }
}
