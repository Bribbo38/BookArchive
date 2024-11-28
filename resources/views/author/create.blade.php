@extends('layout.main')

@section('page_title', 'Crea Autore')

@section('content')
    <div class="container py-6">
        <div class="max-w-4xl mx-auto bg-base-300 p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold mb-4">Crea un Nuovo Autore</h2>

            <form action="{{ route('author.store') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-base-content">Nome Autore</label>
                    <input type="text" id="name" name="name" class="input input-bordered w-1/3 mt-2"
                           value="{{ old('name') }}" placeholder="Inserisci il nome dell'autore">
                    @error('name')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <div class="flex items-center gap-3">
                        <label for="birth_date" class="block text-sm font-medium text-base-content">Data di
                            Nascita</label>
                        <span class="text-sm text-base-content">(optional)</span>
                    </div>
                    <input type="date" id="birthday" name="birthday" class="input input-bordered w-1/4 mt-2"
                           value="{{ old('birthday') }}">
                    @error('birthday')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="flex justify-start mt-4 space-x-3">
                    <button type="submit" class="btn btn-outline btn-primary">Salva Autore</button>
                </div>
            </form>
        </div>
    </div>
@endsection
