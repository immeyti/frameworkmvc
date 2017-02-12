<?php namespace App\Controllers;

use App\Models\User;
use Core\Controller;
use Core\View;

class HomeController extends Controller
{
    public function index()
    {
        return View::renderTemplate("index");
    }
    public function users(){

        $id = isset($_GET['id']) ?  $_GET['id'] : $id = 1;
        $users = new User();
        $user = $users->findUser($id);
        return View::renderTemplate("home.user" , [
            'user' => $user
        ]);
    }
}