@extends('layouts.app')

@section('content')

    <div class="text-center my-10">
        <h2 class="text-4xl text-black">{{ $blog->title }}</h2>
    </div>

    <div class="w-1/2 m-auto">
        <p class="text-xs my-4">
            Posted {{ $blog->created_at }}
        </p>
        <br />   
        {!! $blog->content !!}
    </div>
@endsection
