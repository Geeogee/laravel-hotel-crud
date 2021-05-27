@extends('layouts.main-layout')

@section('title')
    <title>
        Employee {{ $employee['firstname'] . " " . $employee['lastname'] }} 
    </title>
@endsection

@section('main')
    <main>
        <section id="employee-details">
            <div class="container">
                <ul>
                    <li>
                        <ul class="wrapper-employee-info">
                            <li class="employee-info">
                                Firstname:
                            </li>
                            <li>
                                {{ $employee['firstname'] }}
                            </li>
                        </ul> 
                    </li>
                    <li>
                        <ul class="wrapper-employee-info">
                            <li class="employee-info">
                                Lastname:
                            </li>
                            <li class="employee-info">
                                {{ $employee['lastname'] }}
                            </li>
                        </ul> 
                    </li>
                    <li>
                        <ul class="wrapper-employee-info">
                            <li class="employee-info">
                                Role:
                            </li>
                            <li>
                                {{ $employee['role'] }}
                            </li>
                        </ul> 
                    </li>
                    <li>
                        <ul class="wrapper-employee-info">
                            <li class="employee-info">
                                Ral:
                            </li>
                            <li>
                                {{ $employee['ral'] }}
                            </li>
                        </ul> 
                    </li>
                </ul>
            </div>
        </div>
    </main>
@endsection