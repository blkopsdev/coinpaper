<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProcessController extends Controller
{
    public function index()
    {
        return view('coinprocess.amount');
    }

    public function sendto()
    {
        return view('coinprocess.sendto');
    }

    public function confirmation()
    {
        return view('coinprocess.confirmation');
    }

    public function sending()
    {
        return view('coinprocess.sending');
    }
}
