@extends('layouts.posts')

@section('title', $post->title)

@section('content')

<div class="d-flex py-4 gap-2">
    <a class="btn btn-outline-warning" href="{{ route('posts.edit', $post) }}">Modifica</a>
    
    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Elimina
    </button>
       
</div>

<div class="mb-4">
    <h2>-{{$post->author}}</h2>
    <small>Categoria: {{$post->category->name}}</small>
</div>

<section>
    <p>{{$post->content}}</p>
</section>




<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina il post</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Sei sicuro di voler eliminare il post "{{$post->title}}"? Questa azione non può essere annullata.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
        <form action="{{ route('posts.destroy', $post) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-outline-danger" value="Elimina">
        </form>
      </div>
    </div>
  </div>
</div>
@endsection