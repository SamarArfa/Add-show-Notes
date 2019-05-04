@extends('layout.min')
@section('content')
    <h2>add new product</h2>
    <form method="POST" action="{{route('items.store')}}">
        @csrf
        <input type="text" name="name" placeholder="name">
{{--        <label>Personal information</label>--}}
        <br>
        <br>
        <div class="form-group">
            <textarea type="text" name="description" placeholder="description"></textarea>
        </div>
        <br>
        <br>
        <div class="form-group">
            <input type="text" name="price" placeholder="price">
        </div>
        <br>
        <br>
        <div class="form-group">

            <input type="submit" value="add">
{{--        <button type="submit" class="form-control mt-3 btn">Next</button>--}}
        </div>
    </form>
@endsection




