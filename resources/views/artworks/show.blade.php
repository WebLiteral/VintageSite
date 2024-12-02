@extends('layouts.base')

@section('title', $artwork->title)

@section('content')

<div class="flex justify-start flex-col items-center mx-8">
    <h1 class="h1 text-center"> @yield('title') </h1>

    @php
        $actions = [
            'first' => '|<',
            'previous' => '< Prev',
            'random' => 'Random',
            'next' => 'Next >',
            'last' => '> |',
        ];
    @endphp

    <div class="flex justify-between w-3/5 m-4 text-white">
        @foreach ($actions as $action => $label)
            <a class="boringbutton"
                href="{{ route('artworks.navigate', ['slug' => $artwork->slug, 'action' => $action]) }}">
                {{ $label }}
            </a>
        @endforeach
    </div>

    <img class='image' src="{{$artwork->file_url}}" />



    <div class="flex justify-between w-3/5 m-4 text-white">
        @foreach ($actions as $action => $label)
            <a class="boringbutton"
                href="{{ route('artworks.navigate', ['slug' => $artwork->slug, 'action' => $action]) }}">
                {{ $label }}
            </a>
        @endforeach
    </div>



    <h3 class="font-bold text-2xl p-2">Artwork Information</h3>

    <p class="p italic">{{$artwork->description}}</p>

    <div class="p-2">
        <ul>
            <li><span class="font-bold">Title:</span> {{$artwork->title}}</li>
            <li><span class="font-bold">Date Created:</span> {{$artwork->creation_date}}</li>
            <li><span class="font-bold">Medium:</span> {{$artwork->medium}}</li>
            <li><span class="font-bold">Dimensions:</span> {{$artwork->dimensions}}</li>
            <li><span class="font-bold">Artwork ID:</span> #{{$artwork->id}}</li>
        </ul>
    </div>


</div>

@endsection