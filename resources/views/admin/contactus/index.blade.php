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
                                    <th>Jenis</th>
                                    <th>Content</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($contactus as $row)
                                <tr>
                                    <td>{{$row->id}}</td>
                                    <td>{{$row->jenis}}</td>
                                    <td>{{$row->content}}</td>
                                    <td>
                                        <a class="btn btn-warning btn-sm " href="{{route('home.edit', $row->id)}}"><i class="bi bi-pencil-fill"></i></a>
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