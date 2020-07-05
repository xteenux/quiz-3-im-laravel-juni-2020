@extends('layouts.master')

@section('content')

<form action="/artikel" class="was-validated" method="POST" id="form">
    @csrf
  <div class="form-group">
    <label for="judul">Judul artikel:</label>
    <input type="text" class="form-control" id="judul" placeholder="Isi judul" name="judul" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="isi">Isi:</label>
    <input class="form-control" rows="5" id="isi" placeholder="Isi disini" name="isi" required></input>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="judul">Slug:</label>
    <input type="text" class="form-control" id="slug" placeholder="Isi disini" name="slug" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="judul">Tag:</label>
    <input type="text" class="form-control" id="tag" placeholder="tag" name="tag" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection