@extends('layouts.base')

@section('title', 'Articles')

@section('content')


<div class='flex flex-col items-center font-cambria '>

    <h1 class="lh-bigtitle">Articles</h1>


</div>

<div class="h-24"></div>

<div class="font-cambria py-3 px-20 lh-doubleborders flex justify-center">
    <ul class="flex flex-col w-full">
        @foreach ($allArticles as $article)
            <a href="articles/{{$article->slug}}">
                <li class="flex border-b-2 p-2">
                    <div class="px-2">
                        <link rel="stylesheet"
                            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,200,0,0&icon_names=description" />
                        <span class="material-symbols-outlined" style="font-size: 52px;">
                            description
                        </span>
                    </div>

                    <div>
                        <h2 class="text-2xl">{{$article->title}}</h2>
                        <p class="text-sm italic">{{$article->description}}</p>
                    </div>
                </li>
            </a>
        @endforeach
    </ul>
</div>


@endsection