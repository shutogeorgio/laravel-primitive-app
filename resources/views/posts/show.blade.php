@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row d-flex flex-column p-4">
            <div class="d-flex mr-auto ml-auto">
                <img src="/storage/{{ $post->image }}" alt="{{$post->caption}}" class="w-50 align-self-center mr-5">
                <div class="d-flex flex-column">
                    <div class="d-flex align-items-center">
                        <img src="{{ $post->user->profile->profileImage() }}" alt="" class="rounded-circle mr-3" style="max-width: 50px;">
                        <a href="/profile/{{ $post->user->id }}" class="text-dark mr-3"><div class="font-weight-bold">{{ $post->user->username }}</div></a>
                        <a href="#">Follow</a>
                    </div>
                    <div class="border-bottom mt-3 mb-3 w-100"></div>
                    <span class="d-flex flex-row"><a href="/profile/{{ $post->user->id }}" class="text-dark mr-1"><span class="font-weight-bold">{{ $post->user->username }}</span></a><p>{{ $post->caption }}</p></span>
                </div>
            </div>
        </div>
    </div>
@endsection
