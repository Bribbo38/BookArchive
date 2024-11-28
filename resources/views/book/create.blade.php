@extends('layout.main')

@section('page_title', 'Crea Libro')

@section('content')
    <div class="container py-6">
        <div class="max-w-4xl mx-auto bg-base-300 p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold mb-4">Crea un nuovo Libro</h2>

            <form action="{{ route('book.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-4">
                    <label for="title" class="block text-sm font-medium text-base-content">Titolo Libro</label>
                    <input type="text" id="title" name="title" value="{{ old('title') }}"
                           class="input input-bordered w-1/3 mt-2">
                    @error('title')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <div class="flex justify-between items-center">
                        <label for="description" class="text-sm font-medium text-base-content">Descrizione</label>
                        <span class="text-sm text-base-content">(optional)</span>
                    </div>
                    <textarea id="description" name="description" rows="5"
                              class="textarea textarea-bordered w-full mt-2">{{ old('description') }}</textarea>
                    @error('description')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="author_id" class="block text-sm font-medium text-base-content">Autore</label>
                    <select id="author_id" name="author_id" class="select select-bordered w-1/4 mt-2">
                        <option value="">Seleziona un Autore</option>
                        @foreach ($authors as $author)
                            <option value="{{ $author->id }}" {{ old('author_id') == $author->id ? 'selected' : '' }}>
                                {{ $author->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('author_id')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="category_id" class="block text-sm font-medium text-base-content">Categoria</label>
                    <select id="category_id" name="category_id" class="select select-bordered w-1/4 mt-2">
                        <option value="">Seleziona una Categoria</option>
                        @foreach ($categories as $category)
                            <option
                                value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('category_id')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <div class="flex items-center gap-3">
                        <label for="pages" class="block text-sm font-medium text-base-content">Pagine</label>
                        <span class="text-sm text-base-content">(optional)</span>
                    </div>
                    <input type="number" id="pages" name="pages" value="{{ old('pages') }}"
                           class="input input-bordered w-1/6 mt-2">
                    @error('pages')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <div class="flex items-center gap-3">
                        <label for="cover_image" class="block text-sm font-medium text-base-content">Immagine Copertina</label>
                        <span class="text-sm text-base-content">(optional)</span>
                    </div>
                    <input type="file" id="cover_image" name="cover_image" class="file-input file-input-bordered w-full mt-2">
                    @error('cover_image')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="flex justify-start mt-4 space-x-3">
                    <button type="submit" class="btn btn-outline btn-primary">Crea Libro</button>
                </div>
            </form>
        </div>
    </div>
@endsection
