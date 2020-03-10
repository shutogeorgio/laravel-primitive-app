@extends('layouts.app')

@section('content')
    <div class="container d-flex flex-column mr-auto ml-auto">
        @foreach($posts as $key => $post)
            <div class="d-flex flex-column p-4 mr-auto ml-auto" style="width: 90%;">
                <div class="d-flex mr-auto ml-auto" style="width: 100%;">
                    <a href="/profile/{{ $post->user->id }}" class="d-flex mr-5" style="width: 50%;"><img src="/storage/{{ $post->image }}" alt="{{$post->caption}}" class="align-self-center" style="width: 100%;'"></a>
                    <div class="d-flex flex-column" style="width: 100%;">
                        <div class="d-flex align-items-center">
                            <img src="{{ $post->user->profile->profileImage() }}" alt="" class="rounded-circle mr-2 d-flex" style="max-width: 35px;">
                            <a href="/profile/{{ $post->user->id }}" class="text-dark mr-3 d-flex"><div class="font-weight-bold d-block">{{ $post->user->username }}</div></a>
                        </div>
                        <div class="border-bottom mt-3 mb-3 w-100"></div>
                        <span class="d-flex flex-column"><a href="/profile/{{ $post->user->id }}" class="text-dark mr-1"><span class="font-weight-bold">{{ $post->user->username }}</span></a><p>{{ $post->caption }}</p></span>
                    </div>
                </div>
            </div>
         @endforeach
            <div class="d-flex mr-auto ml-auto mt-3">
                {{ $posts->links() }}
            </div>
    </div>
@endsection
