<?php 

namespace App\Controllers;

use SON\Controller;

class UsersController extends Controller
{

    public function index()
    {
        return $this->render(['nome' => 'Marcos Vinicius']);
    }

    public function login()
    {
        return $this->render([],'users/login');
    }

}