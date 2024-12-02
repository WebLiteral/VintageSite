@extends('layouts.base')

@section('title', 'All Artworks')

@section('content')

<hr class="separator"/>
{{ $allArtworks->links() }}
@foreach($allArtworks as $artwork)
<ul>
<li class="flex items-center link p-2 space-x-4">
<img class="image w-32" src="{{$artwork->file_url}}"/><h2>{{$artwork->title}}</h2>
</li>
</ul>
@endforeach
{{ $allArtworks->links() }}
<hr class="separator"/>

@endsection