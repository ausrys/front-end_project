
@extends('layouts.layout')
@section('content')
<section class="pvz">
        @foreach ($projects as  $index => $project)
        @if($index == 0)
        <div class="test active">
            <div class="project-content">
                <h3 class="projects-offer">Čia galėtų būti jūsų Projektas!</h3>
                {{-- <p>{{$project -> summary}}</p> --}}
            </div>
        </div>
        @else
        <div class="test">
            <div class="project-content">
                <h3 class="projects-offer">Čia galėtų būti jūsų Projektas!</h3>
                {{-- <p>{{$project -> summary}}</p> --}}
            </div>
        </div>
        @endif
    @endforeach
    <ul class="controls">
        <li onclick="prevSlide()"></li>
        <li onclick="nextSlide()"></li>
    </ul>
</section>
    

@endsection