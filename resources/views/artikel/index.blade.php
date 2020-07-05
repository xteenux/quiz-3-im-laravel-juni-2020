@extends('layouts.master')

@section('content')
<a href="/artikel/create" class="btn btn-info mb-3">Silahkan buat artikel lagi</a>
<table class="table table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Judul Artikel</th>
        <th>Isi</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($items as $key => $item)  
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $item->judul }}</td>
            <td>{{ $item->isi }}</td>
            <td>
                <a href="/artikel/{{$item->artikel_id}}" class="btn btn-sm btn-info">Show</a>
                <a href="/artikel/{{$item->artikel_id}}/edit" class="btn btn-sm btn-success">Edit</a>
                <form action="/artikel/{{$item->artikel_id}}" method="POST" style="display:inline">
                  @csrf
                  @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>            
                </form>
            </td>
        </tr>
      @endforeach  
    </tbody>
  </table>

@endsection

@push('scripts')

<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    });
</script>

@endpush 