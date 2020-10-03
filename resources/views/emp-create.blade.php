@extends('layouts.main-layout')
@section('content')

<h1>EMPLOYEES:</h1>

<form action="{{ route('emp.store' )}}"  method="post">

    @csrf
    @method('POST')

    <div class="form-group">
        <label for="firstname">FIRSTNAME</label><br>
        <input type="text" name="firstname" value="">
    </div>
    <br> <br>
    <div class="form-group">
        <label for="lastname">LASTNAME</label><br>
        <input type="text" name="lastname" value="">
    </div>
    <br> <br>
    <div class="form-group">
        <label for="date_of_birth">DATE OF BIRTH</label><br>
        <input type="date" name="date_of_birth" value="">
    </div>
    <br> <br>
    <div class="form-group">
        <label for="private_code">PRIVATE CODE</label><br>
        <input type="text" name="private_code" value="">
    </div>

    <br> <br>

    <div class="form-group">
        <label for="location_id">LOCATIOM</label><br>
        <select name="location_id">

            @foreach ($locs as $loc)
            <option value="{{ $loc -> id }}">{{ $loc -> name }} ({{ $loc -> state }})</option>

            @endforeach

        </select>
    </div>

    <br> <br>

    <button type="submit" name="button">SAVE</button>

</form>
@endsection
