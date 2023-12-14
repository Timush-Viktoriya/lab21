<!-- resources/views/books/show.blade.php -->

@extends('layouts.app') <!-- Якщо у вас є макет, інакше можна просто відкинути цей рядок -->

@section('content')
    <h1>{{ $book->title }}</h1>
    <p>{{ $book->author }}</p>
    <p>{{ $book->description }}</p>
    <!-- Додайте інші деталі, які ви хочете відобразити -->
    <a href="{{ route('books.index') }}">Назад до списку книг</a>
@endsection