@extends('layouts.app')

@section('content')
    <div class="d-flex align-items-center justify-content-center my-5">
        <div class="w-50 p-5 bg-white rounded">

            @auth
                <form action="{{ route('posts') }}" method="post">
                    
                    @csrf

                    <div class="">
                        <textarea class="form-control @error('body') is-invalid @enderror" 
                        name="body" id="body" style="height: 100px" placeholder="What's on your mind"></textarea>


                        @error('body')
                            <div class="text-danger form-text">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    <div class="mt-3 justify-content-center">
                        <button type="submit" class="btn btn-primary w-25">Post</button>
                    </div>

                </form>
            @endauth
            

            @if ($posts->count())
                @foreach ($posts as $post)
                    <div class="mt-4">
                        <a href="">{{ $post->user->name }}</a>
                        <span>{{ $post->created_at->diffForHumans() }}</span>
                        <p>{{ $post->body }}</p>
                    </div>
                @endforeach

                <div class="mt-5">
                    {{ $posts->links() }}
                </div>
                
            @else
                <p>No post yet</p>
            @endif

            {{-- test --}}

        </div>
    </div>
@endsection