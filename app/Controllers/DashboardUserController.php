<?php

namespace App\Controllers;

class DashboardUserController extends BaseController
{
    public function index(): string
    {
        return view('DashboardUser');
    }
}
