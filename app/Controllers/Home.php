<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index.php');
    }
    public function cek()
    {
        return view('users/booking_detail');
    }
}
