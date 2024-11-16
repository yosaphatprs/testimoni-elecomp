<?php

namespace App\Controllers;

class ProfileController extends BaseController
{
    public function index(): string
    {
        return view('profile');
    }

    public function edit(): string
    {
        return view('editProfile');
    }
}
