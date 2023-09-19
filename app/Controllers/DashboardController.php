<?php

namespace App\Controllers;
use \App\Models\User;

class DashboardController extends BaseController
{
   public function index(){
        $session = session();
        $user = $session->get('user');
        // print_r($user);
        // die();
        return view('dashboard', ["user"=> $user]);
    }
}
