@extends('layouts.main-layout')
@section('content')

<h1>
    {{ $emp -> firstname }}
    {{ $emp -> lastname }}:


</h1>

<br> <br>

<ul>
    <li>

        Date of Birth: {{ $emp -> date_of_birth }}

    </li>
    <li>
        Private code: {{ $emp -> private_code }}

    </li>
    <li>
        Location: {{ $emp -> location -> name}}
        ({{ $emp -> location -> city }}
            {{ $emp -> location -> state }})
    </li>
    Tasks:
    <ul>
        @foreach ($emp -> tasks as $tas)
        <li>
            {{ $tas -> name }}:
            {{ $tas -> start_date }} -
            {{ $tas -> end_date }}

        </li>
        @endforeach

    </ul>
</ul>



@endsection
