@extends('layout.base')

@section('pageContent')
<h1>Inserisci un nuovo prodotto</h1>

<form action="{{route('products.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="type" class="form-label">Tipo di Pasta</label>
        <input type="text" class="form-control" id="type" name="type" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="cooking_time" class="form-label">Tempo di Cottura</label>
        <input type="number" class="form-control" id="cooking_time" name="cooking_time" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="weight" class="form-label">Peso</label>
        <input type="number" class="form-control" id="weight" name="weight" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea class="form-control" id="description" name="description" aria-describedby="emailHelp"></textarea>
    </div>
 
    <div class="form-group">
        <label for="image" class="form-label">Immagine</label>
        <input type="image" class="form-control" id="image" name="image" placeholder="Inserisci URL immagine">
    </div>
    
    <button type="submit" class="btn btn-primary">Crea</button>
</form>

@endsection