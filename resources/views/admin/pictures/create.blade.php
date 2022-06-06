@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 my-5 text-center d-flex justify-content-between align-items-center">
                <h1>Aggiungi immagini per la galleria</h1>
            </div>
            <div class="col-3 my-5">
                <form action="{{ route('admin.pictures.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <input type="file" multiple name="image">
                    </div>

                    <button class="btn btn-secondary" type="submit">Invia</button>
                </form>
            </div>
            <div class="col-9">
                @foreach ($pictures as $picture)
                    <img width="300" class="img-fluid m-1 border rounded border-light shadow" src="{{ asset("/storage/$picture->image") }}" alt=""></>
                @endforeach
            </div>
        </div>
    </div>
@endsection
