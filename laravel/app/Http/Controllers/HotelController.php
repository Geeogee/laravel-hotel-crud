<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class HotelController extends Controller
{
    public function home() {

        $employees = Employee::all();

        return view('pages.home', compact('employees'));
    }

    public function show($id) {

        $employee = Employee::findOrFail($id);

        return view('pages.show', compact('employee'));
    }
}

