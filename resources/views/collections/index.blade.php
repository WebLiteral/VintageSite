@extends('layouts.base')

@section('title', 'Gallery')

@section('content')


<div class='flex flex-col items-center font-cambria '>

    <h1 class="text-7xl w-max  pb-3 pt-1 px-4 m-10">{{$collection->title}}</h1>
    <img src="{{$collection->file_url}}"></img>


    <div class="w-3/5 space-y-2">
        <ul>


            @foreach($allArtworksFromCollection as $artwork)
                <a href="/gallery/artwork/{{$artwork->slug}}">
                    <li class="pt-5">
                        <div>
                        <img src="{{$artwork->file_url}}" style="height: 100px"></img>
                            <h2 class="text-2xl">{{$artwork->id}} | {{$artwork->title}}</h2>
                            <p class="text-sm italic">{{$artwork->description}}</p>
                        </div>
                    </li>
                </a>

            @endforeach


        </ul>
    </div>
</div>





@endsection