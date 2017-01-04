<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function view()
    {
        return view('shared.login');
    }
    public function login(Request $request)
    {
        if($request->get('email') == 'tenant')
            return redirect()->action('Tenant\TenantController@view');
        else if($request->get('email') == 'staff')
            return redirect()->action('Staff\StaffController@view');
        else return redirect()->back();
    }
}
