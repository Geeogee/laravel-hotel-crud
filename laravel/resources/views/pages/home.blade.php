@extends('layouts.main-layout')

@section('title')
    <title>
        Homepage
    </title>
@endsection

@section('main')
    <main>
        <div class="container">
            <ul>
                @foreach ($employees as $employee)
                    <li>
                        <ul class="employee">
                            <li class="employee-info">
                                {{ $employee['firstname'] }} 
                                {{ $employee['lastname'] }}
                            </li>
                            <li class="employee-cta update">
                                <i class="fas fa-trash-alt"></i>
                            </li>
                            <li class="employee-cta delete">
                                <i class="fas fa-edit"></i>
                            </li>
                        </ul>
                    </li>
                @endforeach
            </ul>
        </div>
    </main>
@endsection