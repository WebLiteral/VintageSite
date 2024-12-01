@extends('layouts.base')

@section('title', 'About')

@section('content')



<div class='flex flex-col items-center text-center font-cambria '>

    <h1 class="lh-bigtitle">Music</h1>

    <ul>
        @foreach($allMusic as $music)
            <li>
                <a href="{{$music->slug}}">
                    <h2>
                        {{$music->id}} | {{$music->title}}
                    </h2>
                </a>
            </li>

        @endforeach
    </ul>


</div>
</div>

</div>

<div class="h-24"></div>

@endsection