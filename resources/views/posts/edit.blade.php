@extends('layouts.posts')

@section('title', 'Modifica il post')

@section('content')

<form action="{{ route('posts.update', $post) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-control mb-3 d-flex flex-column">
        <label for="title">Titolo</label>
        <input type="text" name="title" id="title" value="{{ $post->title }}">
    </div>

    <div class="form-control mb-3 d-flex flex-column">
        <label for="author">Autore</label>
        <input type="text" name="author" id="author" value="{{ $post->author }}">
    </div>

    <div class="form-control mb-3 d-flex flex-column">
        <label for="category">Categoria</label>
        <select name="category_id" id="category_id">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $post->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
            @endforeach
        </select>
    </div>

    {{-- Tags --}}
    <div class="form-control mb-3 d-flex flex-wrap">
        @foreach($tags as $tag)
            <div class="tag me-2">
                <input type="checkbox" name="tags[]" id="tag_{{ $tag->id }}" value="{{ $tag->id }}" {{ $post->tags->contains($tag->id) ? 'checked' : '' }}>
                <label for="tag_{{ $tag->id }}">{{ $tag->name }}</label>
            </div>
        @endforeach
    </div>

    <div class="form-control mb-3 d-flex flex-column">
        <label for="content">Contenuto</label>
        <textarea name="content" id="content" rows="5">{{ $post->content }}</textarea>
    </div>

    <input type="submit" value="Salva">

</form>

@endsection