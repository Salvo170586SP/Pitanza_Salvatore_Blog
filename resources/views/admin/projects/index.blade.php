@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-between align-items-center my-5">
                <h1>I miei progetti</h1>
                <a class="btn btn-primary text-light shadow" href="{{ route('admin.projects.create') }}"><i
                        class="fa-solid fa-plus "></i>
                    Aggiungi un progetto</a>
            </div>
            <div class="col-12">
                <table class="table shadow">
                    <thead>
                        <tr>
                            <th scope="col">Titolo</th>
                            <th scope="col">Testo</th>
                            <th scope="col">Linguaggi</th>
                            <th scope="col">Aggiornato il</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($projects as $project)
                            <tr>
                                <td>{{ $project->title }}</td>
                                <td>{{ Str::limit($project->description, 80) }}</td>

                                <td>
                                    @forelse ($project->languages as $language)
                                    <span class="badge bg-{{ $language->color ?? '' }}">{{ $language->name }}</span> 
                                    @empty
                                    -
                                    @endforelse
                                </td>

                                <td>{{ $project->updated_at }}</td>
                                <td class="d-flex justify-content-end">
                                    <a class="btn btn-sm btn-primary text-light shadow"
                                        href="{{ route('admin.projects.show', $project) }}"><i
                                            class="fa-solid fa-eye"></i></a>
                                    <a class="btn btn-sm btn-primary mx-2 text-light shadow"
                                        href="{{ route('admin.projects.edit', $project) }}"><i
                                            class="fa-solid fa-file-pen"></i></a>
                                    <form action="{{ route('admin.projects.destroy', $project) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        @include('includes.modalProjects')
                                    </form>
                                </td>
                            @empty
                                <td>
                                    Non ci sono progetti
                                </td>
                        @endforelse
                        </tr>
                    </tbody>
                </table>
                {{-- numeri pagine --}}
                <div>
                    @if ($projects->hasPages())
                        {{ $projects->links() }}
                    @endif
                </div>


                {{-- <div class="col-12 my-3">
                <h2>Collegamento linguaggi </h2>
                <ul>
                @foreach ($languages as $language)
                    <li>{{ $language->name }}</li>
                @endforeach 
                </ul>              
            </div> --}}
            </div>
        </div>
    </div>


@endsection
