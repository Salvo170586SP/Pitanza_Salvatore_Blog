@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 text-center d-flex justify-content-between align-items-center">
            <h1>Aggiungi un progetto</h1>
            <a class="btn btn-primary text-light shadow" href="{{ route('admin.projects.index') }}">Torna indietro</a>
        </div>
        <div class="col-12">
            <form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @include('includes.formProject')
            </form>
        </div>
    </div>
</div>

@endsection