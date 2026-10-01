<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Tasks extends BaseController
{
    public function index()
    {
        $model = new TaskModel();

        $data = [
            'title' => 'All Tasks',
            'tasks' => $model->orderBy('task_date', 'ASC')
                            ->orderBy('id', 'ASC')
                            ->findAll(),
        ];

        return view('tasks', $data);
    }
}