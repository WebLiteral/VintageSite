@extends('layouts.base')

@section('title', 'Gallery')

@section('content')


<div class='flex flex-col items-center font-cambria '>

    <h1 class="lh-bigtitle">Gallery</h1>

    <div class="w-3/5 space-y-2">
        <p>Viewing all collections:</p>
        <ul>

            @foreach ($allCollections as $collection)
                <a href="gallery/collection/{{$collection->slug}}">
                    <li class="pt-5">
                        <div>
                            <img src="{{$collection->file_url}}" style="height: 100px"></img>
                            <h2 class="text-2xl">{{$collection->id}} | {{$collection->title}}</h2>
                            <p class="text-sm italic">{{$collection->description}}</p>
                        </div>
                    </li>
                </a>
            @endforeach
        </ul>
    </div>
</div>





@endsection