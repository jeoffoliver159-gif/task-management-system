<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Home extends BaseController
{
    public function index()
    {
        $model = new TaskModel();
        $today = date('Y-m-d');

        $data = [
            'title' => "Today's Tasks",
            'today' => $today,
            'tasks' => $model->where('task_date', $today)
                            ->orderBy('task_date', 'ASC')
                            ->orderBy('id', 'ASC')
                            ->findAll(),
        ];

        return view('welcome', $data);
    }
}
