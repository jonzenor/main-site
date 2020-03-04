@extends('layouts.app')

@section('content')

    <div class="w-1/2">
        <div class="bg-gray-800 text-white text-3xl p-3 justify-center rounded-t-lg"><h2>Create Blog Post</h2></div>

        <div class="bg-gray-200 w-full p-2">
            
            <form action="" method="post">
                @csrf

                <label class="form-label" for="title">Title</label>
                <input type="text" name="title" class="form-input">
            </form>

        </div>
    </div>

@endsection
