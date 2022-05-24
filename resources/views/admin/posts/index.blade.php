@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-between align-items-center my-5">
                <h1>I miei posts</h1>
                <a class="btn btn-primary text-light shadow" href="{{ route('admin.posts.create') }}"><i class="fa-solid fa-plus "></i>
                    Aggiungi un post</a>
            </div>
            <div class="col-12">
                <table class="table shadow">
                    <thead>
                        <tr>
                            <th scope="col">Titolo</th>
                            <th scope="col">Testo</th>
                            <th scope="col">Aggiornato il</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($posts as $post)
                            <tr>
                                <td>{{ $post->title }}</td>
                                <td>{{ Str::limit($post->description, 80) }}</td>
                                <td>{{ $post->updated_at }}</td>
                                <td class="d-flex justify-content-end">
                                    <a class="btn btn-sm btn-primary text-light shadow" href="{{ route('admin.posts.show', $post->id) }}"><i
                                            class="fa-solid fa-eye"></i></a>
                                    <a class="btn btn-sm btn-primary mx-2 text-light shadow"
                                        href="{{ route('admin.posts.edit', $post->id) }}"><i
                                            class="fa-solid fa-file-pen"></i></a>
                                    <form action="{{ route('admin.posts.destroy', $post) }}" method="POSt">
                                        @method('DELETE')
                                        @csrf
                                        @include('includes.modal')
                                    </form>
                                </td>
                            @empty
                                <td>
                                    Non ci sono posts
                                </td>
                        @endforelse
                        </tr>
                    </tbody>
                </table>
                {{-- numeri pagine --}}
                <div>
                    @if ($posts->hasPages())
                        {{ $posts->links() }}
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
