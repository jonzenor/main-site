@extends('layouts.app')

@section('content')
    <div class="sm:flex items-center">
        <div class="w-full mx-auto text-center my-20">
            <p class="font-bold text-2xl">Christian, Programmer, Amateur Photographer, and Occasional Author.</p>
        </div>
    </div>

    <div class="sm:flex justify-evenly">
        <div class="sm:w-5/12 border-gray-800 rounded-lg bg-gray-800 h-64 mt-6 p-2 text-center bg-auto border-black border-2 flex" style="background-image: url({{ asset('images/CodeImage.png') }})">
            <span class="text-white text-3xl m-auto shadow-md" style="font-family: 'Playfair Display', serif;">Web Application Design</span>
        </div>

        <div class="sm:w-5/12 border-gray-800 rounded-lg bg-gray-800 h-64 mt-6 p-2 text-center bg-auto border-black border-2 flex" style="background-image: url({{ asset('images/gog_nighttime.jpg') }}); background-size: cover; background-position: center;">
            <span class="text-white text-3xl m-auto shadow-md" style="font-family: 'Playfair Display', serif;">Photography</span>
        </div>
    </div>
@endsection
