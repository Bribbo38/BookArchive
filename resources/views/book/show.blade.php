@extends('layout.main')

@section('page_title', 'Dettaglio Libro')
@section('title', $book->title)

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 p-4 bg-base-100 rounded-lg shadow-md">
        <div class="col-span-1">
            <figure>
                <img src="{{ asset($book->cover_path ?? 'img/no-cover.webp') }}" alt="{{ $book->title }}" class="rounded-lg">
            </figure>
        </div>

        <div class="col-span-2">
            <h2 class="text-2xl font-bold mb-4">{{ $book->title }}</h2>
            <p class="text-justify mb-4">
                {{ $book->description }}
            </p>

            <div class="border-t pt-3 mt-3 flex flex-wrap gap-2">
                <span class="badge badge-neutral">{{ $book->author->name }}</span>
                <span class="badge badge-neutral">{{ $book->category->name }}</span>
                <span class="badge badge-neutral">{{ $book->pages }} pagine</span>
            </div>
        </div>
    </div>
@endsection
