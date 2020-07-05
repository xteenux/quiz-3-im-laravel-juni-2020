@extends('layouts.master')

@section('content')

<form action="/artikel/{{$items->artikel_id}}" class="was-validated" method="POST">
    @csrf
    @method('PUT')
  <div class="form-group">
    <label for="judul">Judul artikel:</label>
    <input type="text" class="form-control" id="judul" placeholder="Isi judul" name="judul" value="{{$items->judul}}" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="isi">Isi:</label>
    <input class="form-control" rows="5" id="isi" placeholder="Isi disini" name="isi" value="{{$items->isi}}" required></input>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="judul">Slug:</label>
    <input type="text" class="form-control" id="slug" placeholder="Isi disini" name="slug" value="{{$items->slug}}" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="judul">Tag:</label>
    <input type="text" class="form-control" id="tag" placeholder="tag" name="tag" value="{{$items->tag}}" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection 