<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;

class DepartmentController extends Controller
{
    public function index(){
        $data = Department::all();

        return view('department.home',[
            'data' => $data
        ]);
    }
}
