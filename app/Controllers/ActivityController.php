<?php

namespace App\Controllers;

use App\Models\ActivityModel;

class ActivityController extends BaseController
{
    public function index()
    {
        $model = new ActivityModel();
        $activities = $model->getUserActivities(session()->get('user_id'));
        return view('activities/index', ['activities' => $activities]);
    }

    public function create()
    {
        return view('activities/create');
    }

    public function store()
    {
        $model = new ActivityModel();
        $data = [
            'user_id' => session()->get('user_id'),
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'start' => $this->request->getPost('start'),
            'end' => $this->request->getPost('end'),
