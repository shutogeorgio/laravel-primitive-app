@extends('layouts.app')

@section('content')
<div class="container w-100">
    <div class="row w-100">
        <div class="p-4 d-flex mr-auto">
            <img src="{{ $user->profile->profileImage() }}" class="rounded-circle" style="width: 300px; border: 1px solid #1b1e21;">
        </div>
        <div class="p-4 mr-auto d-flex flex-column">
            <div class="d-flex align-items-center">
                <h1 class="mr-3 mb-0">{{ $user -> username}}</h1>

                <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                @can('update', $user->profile)
                    <a href="/p/create" class="pl-5">Add New Post</a>
                @endcan
            </div>
            @can('update', $user->profile)
                <a href="/profile/{{$user->id}}/edit" class="mt-3">Edit Profile</a>
            @endcan
            <div class="d-flex mt-3">
                <div class="pr-3"><strong>{{ $postCounter }}</strong> Posts</div>
                <div class="pr-3"><strong>{{ $followerCounter }}</strong> followers</div>
                <div class="pr-3"><strong>{{ $followingCounter }}</strong> following</div>
            </div>
            <div class="mt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row mt-2" style="place-content: center;">
        @foreach($user->posts as $post)
        <div class="col-4 mr-auto mt-4" style="width: calc(33%);">
            <a href="/p/{{$post->id}}">
                <img src="/storage/{{ $post->image }}" alt="" class="w-100">
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
