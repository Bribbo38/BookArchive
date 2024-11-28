@extends('layout.main')

@section('page_title', 'Lista Categorie')

@section('add_button')
    <a href="{{ route('category.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Aggiungi una Categoria
    </a>
@endsection

@section('title', 'Le Categorie')

@section('content')
    <div class="overflow-x-auto">
        <table class="table w-full">
            <thead>
            <tr>
                <th>#</th>
                <th>Categoria</th>
                <th class="text-right">Azioni</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $category->name }}</td>
                    <td class="text-right">
                        <div class="flex justify-end gap-2">
                            <a href="{{ route('category.edit', $category->id) }}" class="btn btn-sm btn-outline btn-success">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <form action="{{ route('category.destroy', $category->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline btn-error"
                                        onclick="return confirm('Sei sicuro di voler eliminare questa categoria?')">
                                    <i class="bi bi-trash3"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
