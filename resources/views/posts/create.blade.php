@extends('layouts.posts')

@section('title', 'Aggiungi un nuovo post')

@section('content')

<form action="{{ route('posts.store') }}" method="POST">
    @csrf

    <div class="form-control mb-3 d-flex flex-column">
        <label for="title">Titolo</label>
        <input type="text" name="title" id="title">
    </div>

    <div class="form-control mb-3 d-flex flex-column">
        <label for="author">Autore</label>
        <input type="text" name="author" id="author">
    </div>

    <div class="form-control mb-3 d-flex flex-column">
        <label for="category">Categoria</label>
        <select name="category_id" id="category_id">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>

    {{-- Tags --}}

    <div class="form-control mb-3 d-flex flex-wrap">
        @foreach($tags as $tag)
            <div class="tag me-2">
                <input type="checkbox" name="tags[]" id="tag_{{ $tag->id }}" value="{{ $tag->id }}">
                <label for="tag_{{ $tag->id }}">{{ $tag->name }}</label>
            </div>
        @endforeach
    </div>

    <div class="form-control mb-3 d-flex flex-column">
        <label for="content">Contenuto</label>
        <textarea name="content" id="content" rows="5"></textarea>
    </div>

    <input type="submit" value="Salva">

</form>

@endsection