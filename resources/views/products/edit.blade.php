@extends('layout.base')

@section('pageContent')
<h1>Modifica prodotto: {{$product['title']}}</h1>

<form action="{{route('products.update', $product["id"])}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" value="{{old('title') ? old('title') : $product['title']}}">
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="type" class="form-label">Tipo di Pasta</label>
        <input type="text" class="form-control" id="type" name="type" aria-describedby="emailHelp" value="{{old('type') ? old('type') : $product['type']}}">
        @error('type')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="cooking_time" class="form-label">Tempo di Cottura</label>
        <input type="number" class="form-control" id="cooking_time" name="cooking_time" aria-describedby="emailHelp" value="{{old('cooking_time') ? old('cooking_time') : $product['cooking_time']}}">
        @error('cooking_time')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="weight" class="form-label">Peso</label>
        <input type="number" class="form-control" id="weight" name="weight" aria-describedby="emailHelp" value="{{old('weight') ? old('weight') : $product['weight']}}">
        @error('weight')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea class="form-control" id="description" name="description" aria-describedby="emailHelp">{{old('description') ? old('description') : $product['description']}}</textarea>
        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
 
    <div class="form-group">
        <label for="image" class="form-label">Immagine</label>
        <input type="text" class="form-control" id="image" name="image" placeholder="Inserisci URL immagine" value="{{old('image') ? old('image') : $product['image']}}">
        @error('image')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    
    <button type="submit" class="btn btn-secondary">Modifica</button>
</form>

@endsection