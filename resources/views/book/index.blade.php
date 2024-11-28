@extends('layout.main')

@section('page_title', 'Lista Libri')

@section('add_button')
    <a href="{{ route('book.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Aggiungi un Libro
    </a>
@endsection

@section('title', 'I miei Libri')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
        @foreach ($books as $book)
            <div class="card bg-base-200 shadow-md">
                <div class="card-body">
                    <h3 class="card-title">{{ $book->title }}</h3>
                    <p>di {{ $book->author->name }}</p>
                    <div class="badge badge-neutral mt-2">{{ $book->category->name }}</div>
                    <div class="card-actions justify-end mt-4">
                        <div class="px-2 py-1 bg-base-100
                         rounded space-x-3">
                            <a href="{{ route('book.show', $book->id) }}"
                               class="btn btn-sm btn-outline"><i class="bi bi-eye"></i></a>
                            <a href="{{ route('book.edit', $book->id) }}"
                               class="btn btn-sm btn-outline btn-success"><i class="bi bi-pencil"></i></a>
                            <form action="{{ route("book.destroy", $book->id) }}" method="POST" class="inline">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-sm btn-outline btn-error"
                                        onclick="return confirm('Sei sicuro? Stai eliminando un libro')">
                                    <i class="bi bi-trash3"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
