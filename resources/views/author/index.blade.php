@extends('layout.main')

@section('page_title', 'Lista Autori')

@section('add_button')
    <a href="{{ route('author.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Aggiungi un Autore
    </a>
@endsection

@section('title', 'Gli Autori')

@section('content')
    <div class="overflow-x-auto">
        <table class="table w-full">
            <thead>
            <tr>
                <th>#</th>
                <th>Autore</th>
                <th>Data di nascita</th>
                <th class="text-right">Azioni</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($authors as $author)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $author->name }}</td>
                    <td>{{ $author->birthday }}</td>
                    <td class="text-right">
                        <div class="flex justify-end gap-2">
                            <a href="{{ route('author.edit', $author->id) }}" class="btn btn-sm btn-outline btn-success">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <form action="{{ route('author.destroy', $author->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline btn-error"
                                        onclick="return confirm('Sei sicuro di voler eliminare questo autore?')">
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
