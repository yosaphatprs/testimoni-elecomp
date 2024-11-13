<?php

namespace App\Controllers;

class ProgressController extends BaseController
{
    public function index(): string
    {
        return view('dashboard_progress');
    }

    public function add(): string
    {
        return view('add_progress');
    }

    public function edit(): string
    {
        return view('edit_progress');
    }

    public function detail(): string
    {
        return view('detail_progress');
    }
}