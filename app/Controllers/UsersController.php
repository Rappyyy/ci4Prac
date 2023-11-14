<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UsersController extends BaseController
{
    public function index()
    {
        return view('users/list');
    }

    public function createUser()
    {
        //for viewing
        return view('users/add');
    }

    public function storeUser()
    {
        //to store user in database
        return view('users/add');
    }

    public function editUser($id)
    {
        //to insert user in database
        return view('students/edit');
    }


    public function updateUser($id)
    {
        //to update in user database

    }

    public function deleteUser($id)
    {
        //to delete in user database

    }
}
