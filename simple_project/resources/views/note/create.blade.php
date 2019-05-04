@extends('layout.min')
@section('content')
    <h2>Create new note</h2>
    <form method="POST" action="{{route('notes.store')}}">
        @csrf

        <br>
        <br>
        <div class="form-group">

            <input type="text" name="title" placeholder="Tilte">
        </div>
        <br>
        <br>
        <div class="form-group">
            <textarea type="text" name="content" placeholder="Content"></textarea>
        </div>
        <br>
        <br>
        <div class="form-group">

            <input type="submit" value="add">
            {{--        <button type="submit" class="form-control mt-3 btn">Next</button>--}}
        </div>
    </form>
@endsection




