<?php

namespace App\Http\Controllers\Staff;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StaffController extends Controller
{
    public function view()
    {
        return view('staff.view');
    }

    public function complaint()
    {
        return view('staff.complaint');
    }

    public function bill()
    {
        return view('staff.bill');
    }
}
