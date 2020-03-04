@extends('layouts.app')

@section('content')

    <div class="flex justify-center p-5">
        <div class="w-1/2">
            <div class="bg-gray-800 text-white text-3xl p-3 justify-center rounded-t-lg text-center"><h2>Create Blog Post</h2></div>

            <div class="bg-gray-200 w-full p-4">
                
                <form action="{{ route('store-blog') }}" method="post">
                    @csrf

                    <label class="form-label" for="title">Title</label>
                    <input type="text" name="title" class="form-input">
                    
                    @error('title')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                    @enderror
                    
                    <br />
                    <br />
                    @trix(\App\Blog::class, 'content')

                    <br />
                    <div class="w-full text-center">
                        <input type="submit" value="Create Blog" class="bg-gray-800 text-white font-bold p-3 rounded-lg hover:bg-gray-400 hover:text-gray-900 cursor-pointer" />
                    </div>
                </form>

            </div>
        </div>
    </div>
    
@endsection
