@extends('layouts.layout')
@section('content')
<div class="project">
    <div class="project-content">
        <h2>{{$project -> name}}</h2>
        <p>{{$project -> summary}}</p>
    </div>

</div>

@endsection