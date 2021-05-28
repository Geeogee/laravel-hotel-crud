<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
    public function home() {

        $employees = Employee::all();

        return view('pages.home', compact('employees'));
    }

    public function show($id) {

        $employee = Employee::findOrFail($id);

        return view('pages.show', compact('employee'));
    }

    public function edit($id) {

        $employee = Employee::findOrFail($id);

        return view('pages.edit', compact('employee'));
    }

    public function update(Request $request, $id) {

        $validated = $request -> validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'role' => 'required|string',
            'ral' => 'nullable|integer'
        ]);

        $employee = Employee::findOrFail($id);
        $employee -> update($validated);

        return redirect() -> route('show', $employee -> id);
    }

    public function delete($id) {

        $employee = Employee::findOrFail($id);
        $employee -> delete();

        return redirect() -> route('home');
    }
}

