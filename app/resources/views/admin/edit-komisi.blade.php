@extends('admin.template.edit')
@section('container-admin')
<div class="container mt-5">
    <h3 class="text-uppercase text-secondary">Edit Komisi Marketing : <span class="text-danger">{{ $user->name }}</span> </h3>

    <div class="col-lg-8 mt-3">
        <form action="/update-komisi/{{ $user->name }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title">Jumlah Komisi</label>
                <input type="text" class="form-control mt-2 @error('title') is-invalid @enderror" id="komisi" name="komisi" required value="{{ old('komisi', $user->komisi) }}">
                @error('komisi')
                <div class="invalid-feedback"> 
                    {{ $message }}
                </div>
                @enderror
            </div> 

            <div class="mb-3">
                <label for="title">Klaim Komisi</label>
                <input type="text" class="form-control mt-2 @error('title') is-invalid @enderror" id="klaim" name="klaim" required value="{{ old('klaim', $user->klaim) }}">
                @error('klaim')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div> 
            
            <button type="submit" class="btn btn-primary">Update</button> <a href="/daftar-marketing">Kembali</a>
        </form>
    </div>
</div>
@endsection