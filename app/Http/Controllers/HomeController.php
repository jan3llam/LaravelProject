<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class HomeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employee',['employees'=>$employees,'layout'=>'index']);
    }
}
