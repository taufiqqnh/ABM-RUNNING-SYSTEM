@extends('admin.layout.tamplate')
@section('content')

<div class="page-heading">
    <h3>Dashboard</h3>
</div> 
<section class="section">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">
                Home
            </h5>
            <a class="btn btn-primary ml-auto" href="{{route('home.create')}}"><i class="fas fa-plus"></i> Create Home</a>
        </div>
        <div class="card-body">
            @if (Session::has('success'))
            <div class="alert alert-primary" role="alert">
                {{Session('success')}}
            </div>
        @endif
            <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Judul</th>
                                    <th>Keterangan</th>
                                    <th>Gambar</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($home as $row)
                                <tr>
                                    <td>{{$row->id}}</td>
                                    <td>{{$row->judul}}</td>
                                    <td>{{$row->desc}}</td>
                                    <td>{{$row->users->name}}</td>
                                    <td>
                                        <img src="{{asset('uploads/'.$row->image)}}" width="100">
                                    </td>
                                    <td>
                                        <a class="btn btn-warning btn-sm " href="{{route('home.edit', $row->id)}}"><i class="bi bi-pencil-fill"></i></a>
                                        <form action="/home/{{$row->id}}" method="POST" class="d-inline">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-danger btn-sm" type="submit">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="7" class="text-center">Data Tidak Ada</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
</section>
@endsection
@push("script")
<script>
      $('.about').addClass("active");
</script>
@endpush