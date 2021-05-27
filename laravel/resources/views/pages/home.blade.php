@extends('layouts.main-layout')

@section('title')
    <title>
        Homepage
    </title>
@endsection

@section('main')
    <main>
        <section id="employee-list">
            <div class="container">
                <ul>
                    @foreach ($employees as $employee)
                        <li>
                            <ul class="employee">
                                <li class="employee-info">
                                    <a href="{{ route('show', $employee -> id) }}">
                                        {{ $employee['firstname'] }} 
                                        {{ $employee['lastname'] }}
                                    </a>
                                </li>
                                <li class="employee-cta update">
                                    <i class="fas fa-edit"></i>
                                </li>
                                <li class="employee-cta delete">
                                    <i class="fas fa-trash-alt"></i>
                                </li>
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </main>
@endsection