@extends('app')

@section('content')
    @foreach($users as $user)
        <h2>{{ $user }}</h2>
    @endforeach
@endsection
