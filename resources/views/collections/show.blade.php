@extends('layouts.base')

@section('title', $collection->title)

@section('content')



<h1 class="h1">Viewing Collection: @yield('title') </h1>

<ul class="grid grid-cols-3">
@foreach($allArtworksFromCollection as $artwork)
        <li>
            <a class="flex items-center justify-center flex-col link p-2 space-x-4" href="{{route('artworks.show', ['slug' => $artwork->slug]) }}">
                <img class="image w-32" src="{{$artwork->file_url}}" />
                <h2>{{$artwork->title}}</h2>
            </a>

        </li>
@endforeach
</ul>
<hr class="separator" />

@endsection