<?php

namespace App\Controllers;

use App\Models\UserModel;

class Profile extends BaseController
{
    public function index()
    {
        $model = new UserModel();

        $data = [
            'title' => 'Developer Profile',
            'user' => $model->first(),
        ];

        return view('profile', $data);
    }
}
