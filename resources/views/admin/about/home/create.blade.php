@extends('admin.layout.tamplate')
@section('content')

<div class="page-heading">
    <h3>Dashboard</h3>
</div> 
<section id="basic-vertical-layouts">
    <div class="row match-height">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Form Tambah Data About</h4>
                    <a class="btn btn-primary btn-sm" href="{{route('home.index')}}"><i class="bi bi-backspace"></i> Kembali</a>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form action="{{ route('home.store') }}" method="post" enctype="multipart/form-data">
                            @method('post')
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="judul">Judul</label>
                                            <input type="text" id="judul" class="form-control" name="judul" placeholder="Judul" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="slug">Slug</label>
                                            <input type="text" id="slug" class="form-control"
                                                name="slug" placeholder="Slug" readonly>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="desc">Keterangan</label>
                                            <input id="desc" type="hidden" name="desc">
                                            <trix-editor input="desc"></trix-editor>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="image" class="form-label">Gambar</label>
                                        <input type="file"  name="image"  class="form-control">
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                        <button type="reset"
                                            class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    const judul = document.querySelector('#judul');
    const slug = document.querySelector('#slug');

    judul.addEventListener('change', function(){
        fetch('/dashboard/home/checkSlug?judul=' + judul.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })
</script>
@endsection
@push("script")
<script>
      $('.about').addClass("active");
</script>
@endpush