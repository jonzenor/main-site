@extends('layouts.app')

@section('content')

    <div class="flex justify-center p-5">

        <div class="w-1/3">
            <div class="bg-black text-white text-3xl p-3 justify-center rounded-t-lg text-center"><h2>List of Articles</h2></div>

            <div class="bg-gray-200 w-full p-4 rounded-b-lg">
                @foreach ($blogs as $blog)
                    <a href="{{ route('view-blog', $blog->slug) }}" class="w-full p-1 m-2">
                        <div class="flex w-full">
                            <div class="w-2/3"> <span class="link">{{ $blog->title }}</span> </div>
                            <div> {{ $blog->created_at }}</div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    
@endsection
