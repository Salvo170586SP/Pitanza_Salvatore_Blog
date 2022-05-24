@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                {{-- card --}}
                <div class="card mb-3 shadow">
                    <figure >
                        @if ($post->image)
                            <img src="{{ $post->image}}" class="card-img-top p-3"
                                alt="{{ $post->title }}">
                        @else
                            <img src="https://banksiafdn.com/wp-content/uploads/2019/10/placeholde-image.jpg" class="card-img-top p-3"
                                alt="preview" id="preview">
                        @endif
                    </figure>
                    <div class="card-body">
                        <div class="d-flex justify-content-end">
                            <a class="btn btn-sm btn-primary text-light shadow mx-3" href="{{ route('admin.posts.edit', $post->id) }}"><i
                                    class="fa-solid fa-file-pen"></i></a>
                                    @include('includes.modal')
                        </div>
                        <hr>
                        <h2 class="card-title">{{ $post->title }}</h2>
                        <p class="card-text">{{ $post->description }}</p>
                        <a class="btn btn-primary text-light shadow" href="{{ route('admin.posts.index') }}">Torna indietro</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection