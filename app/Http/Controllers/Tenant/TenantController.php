<?php

namespace App\Http\Controllers\Tenant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TenantController extends Controller
{
    public function view()
    {
        return view('tenant.view');
    }

    public function complaint()
    {
        return view('tenant.complaint');
    }

    public function bill()
    {
        return view('tenant.bill');
    }

    public function profile()
    {
        return view('tenant.profile');
    }
}
