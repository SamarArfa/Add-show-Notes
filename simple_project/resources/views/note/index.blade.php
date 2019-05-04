
@extends('layout.min')
@section('content')
    <h2>all Notes</h2>
    <a href="{{route('notes.create')}}" style="margin-left: 20%">add Note</a>
    <table class="tab table table-bordered text-center" border="1">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th>Submitted At</th>
        </tr>
        </thead>
        <tbody>
        @forelse($notes as $note)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{$note->title}}</td>
                <td>{{str_limit($note->content, 20)}}</td>
                <td>{{ \Carbon\Carbon::parse($note->created_at)->format('Y-m-d D') }}</td>
{{--                <td>{{ \Carbon\Carbon::parse($note->created_at)->sortByDesc() }}</td>->--}}
            </tr>
        @empty
            <tr>

                <td colspan="6">no note</td>

            </tr>

        @endforelse
    </table>


@endsection