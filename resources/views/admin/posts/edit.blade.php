@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 text-center d-flex justify-content-between align-items-center">
            <h1>Modifica il tuo post</h1>
            <a class="btn btn-primary text-light shadow" href="{{ route('admin.posts.index') }}">Torna indietro</a>
        </div>
        <div class="col-12">
            <form action="{{ route('admin.posts.update', $post) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @include('includes.form')
            </form>
        </div>
    </div>
</div>

@endsection