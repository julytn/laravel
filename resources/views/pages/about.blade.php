@extends('app')

@section('content')




<h1>About Me</h1>

<p>
    U of T CS Student
</p>

@if (count($people))
    <h3>People I like:</h3>
        <ul>
            @foreach($people as $person)
                <li>{{ $person }}</li>
            @endforeach
        </ul>
@endif


@stop
