@extends('layouts.base')

@section('title', 'All Collections')

@section('content')

<h1 class="h1"> @yield('title') </h1>

<hr class="separator" />
@foreach($allCollections as $collection)
    <ul>
        <li>
            <a class="flex items-center link p-2 space-x-4" href="{{ route('collections.show', ['slug' => $collection->slug]) }}">
                <img class="image w-32" src="{{$collection->file_url}}" />
                <h2>{{$collection->title}}</h2>
            </a>
        </li>
    </ul>
@endforeach
<hr class="separator" />


@endsection