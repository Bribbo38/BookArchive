@extends('layout.main')

@section('page_title', 'Crea Categoria')

@section('content')
    <div class="container py-6">
        <div class="max-w-4xl mx-auto bg-base-300 p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold mb-4">Crea una nuova Categoria</h2>

            <form action="{{ route('category.store') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-base-content">Nome Categoria</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" class="input input-bordered w-1/4 mt-2">
                    @error('name')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="flex justify-start mt-4 space-x-3">
                    <button type="submit" class="btn btn-outline btn-primary">Crea Categoria</button>
                </div>
            </form>
        </div>
    </div>
@endsection
