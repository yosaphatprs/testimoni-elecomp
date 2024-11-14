<?php

namespace App\Controllers;
use App\Models\ProgressModel;

class ProgressController extends BaseController
{
    public function index(): string
    {
        $model = new ProgressModel();
        $data['progress'] = $model->findAll();
        return view('dashboard_progress', $data);
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