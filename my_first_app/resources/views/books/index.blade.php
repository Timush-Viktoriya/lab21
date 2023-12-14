<!-- resources/views/books/index.blade.php -->

@extends('layouts.app') <!-- Якщо у вас є макет, інакше можна просто відкинути цей рядок -->

@section('content')
    <h1>Список книг</h1>

    @foreach($books as $book)
        <div>
            <h3>{{ $book->title }}</h3>
            <p>{{ $book->author }}</p>
            <p>{{ $book->description }}</p>
            <a href="{{ route('books.show', $book) }}">Деталі</a>
        </div>
    @endforeach
@endsection