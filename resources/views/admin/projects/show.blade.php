@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                {{-- card --}}
                <div class="card mb-3" style="max-width: 840px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <figure>
                                @if ($project->img)
                                    <img src="{{ asset("/storage/$project->img") }}" class="card-img-top p-3"
                                        alt="{{ $project->title }}">
                                @else
                                    <img src="https://banksiafdn.com/wp-content/uploads/2019/10/placeholde-image.jpg"
                                        class="card-img-top p-3" alt="preview" id="preview">
                                @endif
                            </figure>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <div class="d-flex justify-content-end">
                                    <a class="btn btn-sm btn-primary text-light shadow mx-3"
                                        href="{{ route('admin.projects.edit', $project->id) }}"><i
                                            class="fa-solid fa-file-pen"></i></a>
                                    @include('includes.modalProjects')
                                </div>
                                @forelse ($project->languages as $language)
                                <span class="badge bg-{{ $language->color ?? '' }}"> {{ $language->name ?? '-'}}</span>
                                @empty
                                -
                                @endforelse
                                <hr>
                                <h2 class="card-title">{{ $project->title }}</h2>
                                <p class="card-text">{{ $project->description }}</p>
                                <a class="btn btn-primary text-light shadow"
                                    href="{{ route('admin.projects.index') }}">Torna indietro</a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
