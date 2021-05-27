@extends('layouts.main-layout')

@section('title')
    <title>
        Update {{ $employee['firstname'] . " " . $employee['lastname']}}
    </title>
@endsection

@section('main')
    <main>
        <section id="update-user">
            <div class="container">
                <form method="POST" action="{{ route('update', $employee -> id)}}">
                    @csrf
                    @method('POST')

                    <div class="wrapper-field">
                        <label for="firstname">
                            Firstname
                        </label>
                        <input type="text" id="firstname" name="firstname" value="{{ $employee['firstname'] }}" class="@error('firstname') is-invalid @enderror"> 
                    </div>
                    <div class="wrapper-field">
                        <label for="lastname">
                            Lastname
                        </label>
                        <input type="text" id="lastname" name="lastname" value="{{ $employee['lastname'] }}" class="@error('lastname') is-invalid @enderror">
                    </div>
                    <div class="wrapper-field">
                        <label for="role">
                            Role
                        </label>
                        <input type="text" id="role" name="role" value="{{ $employee['role'] }}" class="@error('role') is-invalid @enderror">
                    </div>
                    <div class="wrapper-field">
                        <label for="ral">
                            Ral
                        </label>
                        <input type="text" id="ral" name="ral" value="{{ $employee['ral'] }}" class="@error('ral') is-invalid @enderror">
                    </div>
                    <button type="submit">
                        Update
                    </button>
                </form>

                @if ($errors->any())
                    <div class="alert">
                        <ul class="errors-log">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            </div>
        </section>
    </main>
@endsection