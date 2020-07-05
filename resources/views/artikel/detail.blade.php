@extends('layouts.master')

@section('content')

<div class="card">
  <div class="card-body">
    <h4 class="card-title">Judul: {{ $items->judul }}</h4>
    <p class="card-text">slug: {{ $items->slug }}</p>
    <p class="card-text">{{ $items->isi }}</p>
    <p class="card-text btn btn-sm btn-success">{{ $items->tag }}</p>
  </div>
</div>
<a href="/artikel" class="btn btn-info mt-3">Back</a>

@endsection 