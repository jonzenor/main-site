@extends('layouts.app')

@section('content')
    <div class="flex items-center">
        <div class="w-full mx-auto text-center my-20">
            <p class="font-bold text-2xl">Christian, Programmer, Amateur Photographer, and occasional Author.</p>
        </div>
    </div>

    <div class="flex justify-evenly">
        <div class="w-5/12 border-gray-800 rounded-lg bg-gray-800 h-64 mt-6 p-2 text-center bg-auto border-black border-2 flex" style="background-image: url({{ asset('images/CodeImage.png') }})">
            <span class="text-white text-3xl m-auto shadow-md" style="font-family: 'Press Start 2P', cursive;">Web Application Design</span>
        </div>
        <div class="w-5/12 border-gray-800 rounded-lg bg-gray-800 h-64 mt-6 p-2 text-center"><span class="w-full h-full bg-white inline-block rounded-lg">Photography</span></div>
    </div>
@endsection
