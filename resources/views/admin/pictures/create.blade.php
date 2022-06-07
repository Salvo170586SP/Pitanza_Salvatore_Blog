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

                    <button class="btn btn-secondary shadow" type="submit">Aggiungi</button>
                </form>
            </div>
            <div class="col-9">
                <div class="d-flex  flex-wrap b-s">
                    @forelse ($pictures as $picture)        
                    <div class="img-gallery position-relative">
                        <img width="233" class="img-fluid img-scale m-1 border rounded border-secondary " src="{{ asset("/storage/$picture->image") }}" alt="img">
                        <form action="{{ route('admin.pictures.destroy', $picture) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-small btn-danger position-absolute"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </div>
                    @empty
                    <p class="w-100 text-center">Non ci sono immagini caricate</p>
                    @endforelse 
                </div>
            </div>
        </div>
    </div>
@endsection
