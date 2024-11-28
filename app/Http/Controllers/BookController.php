<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Support\Str;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\Image;
use Intervention\Image\ImageManager;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();

        return view('book.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $authors = Author::all();
        $categories = Category::all();

        return view('book.create', compact('authors', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('cover_image')) {
            $image = $request->file('cover_image');

            $uniqueName = Str::uuid() . '.' . $image->getClientOriginalExtension();

            $destinationPath = public_path('img/covers');

            $manager = new ImageManager(new Driver());

            $manager->read($image)
                ->cover(400, 520)
                ->save($destinationPath . '/' . $uniqueName);

            $validated['cover_path'] = 'img/covers/' . $uniqueName;
        }

        Book::create($validated);

        return redirect()->route('book.index')->with('success', 'Libro creato con successo!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('book.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $authors = Author::all();
        $categories = Category::all();

        return view('book.edit', compact('book', 'authors', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BookRequest $request, string $id)
    {
        $validated = $request->validated();

        $book = Book::findOrFail($id);

        if ($request->hasFile('cover_image')) {
            $image = $request->file('cover_image');

            $uniqueName = Str::uuid() . '.' . $image->getClientOriginalExtension();

            $destinationPath = public_path('img/covers');

            $manager = new ImageManager(new Driver());

            $manager->read($image)
                ->cover(400, 520)
                ->save($destinationPath . '/' . $uniqueName);

            if ($book->cover_path && file_exists(public_path($book->cover_path))) {
                unlink(public_path($book->cover_path));
            }

            $validated['cover_path'] = 'img/covers/' . $uniqueName;
        }

        $book->update($validated);

        return redirect()->route('book.index')->with('success', 'Libro aggiornato con successo!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('book.index')->with('success', 'Libro eliminato con successo!');
    }
}
