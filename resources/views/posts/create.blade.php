@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/p" enctype="multipart/form-data" method="post">
            @csrf
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row">
                        <h1>Add New Post</h1>
                    </div>
                    <div class="form-group row">
                        <div class="">
                            <label for="name" class="col-form-label text-md-right">Post Caption</label>
                            <input id="caption"
                                   type="text"
                                   class="form-control @error('caption') is-invalid @enderror"
                                   name="caption"
                                   value="{{ old('caption') }}"
                                   autocomplete="caption" autofocus>

                            @error('caption')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <input type="file" class="form-control-file" name="image" id="image">
                        @error('image')
                        <strong>{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="row">
                        <button class="btn btn-primary" >Add New Posts</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
