<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LiteralHat | @yield('title', 'LiteralHat.com')</title>
    @vite(['resources/css/app.css', 'resources/js/randomsong.js'])
</head>

<div class="bg-stripe-navy w-screen h-screen flex justify-center">

    <div
        class="bg-vintage-white h-screen w-full max-w-[1800px] border-x-8 border-vintage-red outline outline-black outline-4 shadow-lg shadow-black">
        <div class="bg-vintage-white border-x-2 border-vintage-white w-full h-screen ">

            @include('nav.topbar')
            @include('nav.topbanner')

            <div class="w-full bg-vintage-navy h-3 border-b-2 border-t-4 border-vintage-black"></div>

            <div class="flex">

                @include('nav.leftbar')

                <div class="w-full px-4">



                    @yield('content')



                </div>
                <div class="w-96 bg-vintage-cream border-l-2 border-vintage-beige"></div>
            </div>


        </div>
    </div>
</div>

</html>