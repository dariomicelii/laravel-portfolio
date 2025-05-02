@extends('layouts.posts')

@section('title', 'Tutti i post')

@section('content')

<div class="d-flex py-4 gap-2">
    <a class="btn btn-outline-primary" href="{{ route('posts.create') }}">Aggiungi un post</a>
</div>

    <table>
        <thead>
            <tr>
                <th>Titolo</th>
                <th>Autore</th>
                <th>Categoria</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td class="px-2">{{ $post->title }}</td>
                <td class="px-2">{{ $post->author }}</td>
                <td class="px-2">{{ $post->category->name }}</td>
                <td class="px-2">
                    <a href="{{ route('posts.show', $post) }}">Visualizza</a>
                </td>    
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection