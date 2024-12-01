@extends('layouts.base')

@section('title', 'Articles')

@section('content')

<a href="/articles" class="underline underline-offset-4 border-white italic p-10">&nbsp;Back to Articles&nbsp;</a>

<div class='flex flex-col items-center font-cambria '>
    <div class="w-full pb-3 pt-1 px-4 m-10 border-b-2 text-center">
        <h1 class="text-7xl">
            {{$article->title}}
        </h1>
        <p class="pt-6 italic">{{$article->description}}</p>
    </div>



    <div class="w-3/5 space-y-9 text-lg articlestyling">
        {!! $article->content !!}
    </div>
</div>

<div class="h-24"></div>




@endsection