@extends('layouts.main-layout')
@section('content')

<h1>EMPLOYEES:</h1>

    <ul>
        @foreach ($emps as $emp)

        <li>

            {{ $emp -> firstname }}
            {{ $emp -> lastname }}

        </li>

        @endforeach

    </ul>

@endsection
