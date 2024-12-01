@extends('layouts.base')

@section('title', 'Gallery')

@section('content')

<div class="flex flex-col items-center">
    <h1 class="font-oldenglish text-7xl text-center pb-1 pt-10 px-4 m-5">#{{$artwork->id}} - {{$artwork->title}}</h1>
    <div class="border-t-2 w-full flex items-center flex-col">
        <ul class="uppercase font-bebas text-2xl p-6 w-2/3 flex w-full justify-between text-3xl text-center">
            <li><a>〈 Prev</a></li>
            <li><a>Random</a></li>
            <li><a>Next 〉</a></li>
        </ul>
    </div>
</div>

<div class='flex justify-center px-52 font-cambria border-b-2 pb-10 mb-24'>
    <div class="w-7/12">
        <img class="p-10 w-full h-full" src="{{$artwork->file_url}}"></img>
    </div>

    <div class="w-5/12 py-16 text-xl pb-52">
        <ul class="space-y-5">
            <li><span class="lh-artworklabel">Title</span><span class="lh-artworklabel2">{{$artwork->title}}</span></li>
            <li><span class="lh-artworklabel">Artwork No.</span><span class="lh-artworklabel2">#{{$artwork->id}}</span>
            </li>
            <li><span class="lh-artworklabel">Date Created</span><span
                    class="lh-artworklabel2">{{$artwork->date_created}}</span></li>
            <li><span class="lh-artworklabel">Medium</span><span class="lh-artworklabel2">{{$artwork->medium}}</span>
            </li>
            <li><span class="lh-artworklabel">Dimensions</span><span
                    class="lh-artworklabel2">{{$artwork->dimensions}}</span></li>
        </ul>
    </div>

</div>





@endsection