@extends('layouts.base')

@section('title', 'Artwork Gallery')

@section('content')

<p class="p">Welcome to the artwork gallery.</p>
<p class="p">This is a full archive of (hopefully) everything I have drawn, to date. </p>
<p class="p">Records in this gallery are being continuously updated, and that it is a constant work in progress.</p>
<h2 class="h2">General Trigger Warning</h2>
<p class="p">Please note that some artworks in this gallery may be sensitive etc write some shit about that</p>



<hr class="h-px border-0 my-4 bg-vintage-ivory">


<h2 class="h2 text-center">Select a category</h2>
<ul class="flex justify-evenly text-center items-start link space-x-6">
    <li class="flex flex-col justify-center text-bold text-wrap w-32">
        <a href="{{route('collections.index')}}">
            <img class="image w-32 mb-5" src="/img/placeholder.jpg" />
            <h3>Artworks by Collection</h3>
        </a>
    </li>
    <li class="flex flex-col justify-center text-bold">
        <a href="{{route('artworks.index')}}">
            <img class="image w-32 mb-5" src="/img/placeholder.jpg" />
            <h3>All Artworks</h3>
        </a>
    </li>
    <li class="flex flex-col justify-center text-bold">
        <a href="">
            <img class="image w-32 mb-5" src="/img/placeholder.jpg" />
            <h3>Advanced Search</h3>
        </a>
    </li>
    <li class="flex flex-col justify-center text-bold">
        <a href="">
            <img class="image w-32 mb-5" src="/img/placeholder.jpg" />
            <h3>Latest</h3>
        </a>
    </li>
    <li class="flex flex-col justify-center text-bold">
        <a href="">
            <img class="image w-32 mb-5" src="/img/placeholder.jpg" />
            <h3>Random</h3>
        </a>
    </li>
</ul>

@endsection