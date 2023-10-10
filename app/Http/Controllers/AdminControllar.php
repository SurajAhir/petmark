<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminControllar extends Controller
{
    

    function register()  {

        return view('admin.auth.register');
        
    }

    function registerData(Request $request)  {
        
        
        echo "<pre>";

        print_r($request->all());
        
    }

    function login()  {

        return view('admin.auth.login');
        
    }

    function loginData(Request $request)  {
        
        
        echo "<pre>";

        print_r($request->all());
        
    }

    function verify()  {

        return view('admin.auth.verify');
        
    }

    function email()  {

        return view('admin.auth.passwords.email');
        
    }

    function confirm()  {

        return view('admin.auth.passwords.confirm');
        
    }

    function reset()  {

        return view('admin.auth.passwords.reset');
        
    }

    function calendar()  {

        return view('admin.pages.calendar');
        
    }

    function charts_knob()  {

        return view('admin.pages.charts-knob');
        
    }

    function dashboard()  {

        return view('admin.pages.dashboard');
        
    }

    function forgot_password()  {

        return view('admin.pages.forgot-password');
        
    }

    function form_picker()  {

        return view('admin.pages.form-picker');
      
        
    }

    function invoice()  {

        return view('admin.pages.invoice');
    }

    function layouts()  {

        return view('admin.pages.layouts');
    }

    function navbar()  {

        return view('admin.pages.navbar');
    }

    function pricing()  {

        return view('admin.pages.pricing');
    }

    function profile()  {

        return view('admin.pages.profile');
    }

    function project()  {

        return view('admin.pages.project');
    }

    function table_datatable()  {

        return view('admin.pages.table-datatable');
    }

    function taskboard()  {

        return view('admin.pages.taskboard');
    }

    function view()  {

        return view('admin.pages.view');
    }

    function widgets()  {

        return view('admin.pages.widgets');
    }




    function alerts()  {

        return view('admin.pages.ui.alerts');
    }

    function badges()  {

        return view('admin.pages.ui.badges');
    }

    function buttons()  {

        return view('admin.pages.ui.buttons');
    }

    function cards()  {

        return view('admin.pages.ui.cards');
    }

    function carousel()  {

        return view('admin.pages.ui.carousel');
    }

    function icons()  {

        return view('admin.pages.ui.icons');
    }

    function modals()  {

        return view('admin.pages.ui.modals');
    }

    function navigation()  {

        return view('admin.pages.ui.navigation');
    }

    function notifications()  {

        return view('admin.pages.ui.notifications');
    }

    function range_slider()  {

        return view('admin.pages.ui.range-slider');
    }

    function rating()  {

        return view('admin.pages.ui.rating');
    }

    function session_timeout()  {

        return view('admin.pages.ui.session-timeout');
    }












    function api()  {

        return view('admin.api');
    }

    function clear_cache()  {

        return view('admin.clear-cache');
    }

    function create_user()  {

        return view('admin.create-user');
    }


    function edit_roles()  {

        return view('admin.edit-roles');
    }

    function home()  {

        return view('admin.home');
    }

    function permission()  {

        return view('admin.permission');
    }

    function roles()  {

        return view('admin.roles');
    }

    function user_edit()  {

        return view('admin.user-edit');
    }

    function users()  {

        return view('admin.users');
    }
}

