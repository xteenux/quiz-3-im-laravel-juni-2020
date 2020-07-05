@extends('layouts.master')

@section('content')

        <h1 class="h3 mb-4 text-gray-800">Ini adalah ERD dari quiz-3</h1>
        <img src="{{ asset('/images/Quiz3-ERD.png') }}" alt="">
       <div>
       <a href="/artikel/create" class="btn btn-primary mt-3">Buat Artikel</a>
       <a href="/artikel" class="btn btn-info mt-3">Lihat daftar artikel</a>
       </div>

@endsection 