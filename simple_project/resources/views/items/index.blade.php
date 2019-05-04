
@extends('layout.min')
@section('content')
    <h2>all products</h2>
    <a href="{{route('items.create')}}">add product</a>
<table class="tab table table-bordered text-center" border="1">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">description</th>
        <th scope="col">price</th>
        <th>Category</th>
        <th>Submitted At</th>
    </tr>
    </thead>
    <tbody>
    @forelse($items as $item)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{$item->name}}</td>
        <td>{{str_limit($item->description, 20)}}</td>
        <td>{{$item->price}}</td>

        <td>{{ $item->category_id }}</td>
        <td>{{ \Carbon\Carbon::parse($item->created_at)->format('Y-m-d D') }}</td>

    </tr>
    @empty
    <tr>

        <td colspan="6">no product</td>

    </tr>

   @endforelse
</table>


@endsection