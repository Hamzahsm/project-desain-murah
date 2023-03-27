@extends('admin.template.edit')
@section('container-admin')
<div class="container mt-5">
    <h3 class="text-uppercase text-secondary"> Tambah Progress Desain </h3>
    <hr>
    <div class="col-lg-8 mt-5">
        <form action="/add-progress" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- <div class="mb-3">
                <label for="referral"> Code Referral Marketing</label>
                <select name="referral_id" id="referral" class="form-select mt-2">
                    @foreach ($referrals as $referral)
                        <option value="{{ $referral->id }}" selected>{{ $referral->name }}</option>   
                    @endforeach 
                </select> 
            </div>  --}}

            <div class="mb-3">
                <label for="user" class="fw-bold"> Nama Marketing</label>
                <select name="user_id" id="user" class="form-select mt-2">
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}" selected>{{ $user->name }}</option>   
                    @endforeach
                </select>  
            </div> 

            <div class="mb-3">
                <label for="name" class="fw-bold">Nama Klien</label>
                <input type="text" class="form-control mt-2 @error('title') is-invalid @enderror" id="name" name="name" required>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div> 

            <div class="mb-3">
                <label for="keterangan" class="fw-bold">Keterangan</label>
                {{-- <input type="text" class="form-control mt-2 @error('title') is-invalid @enderror" id="keterangan" name="keterangan" required> --}}
                @error('keterangan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                <textarea class="ckeditor form-control mt-2" name="keterangan" value="{{ old('keterangan') }}" id="keterangan" required></textarea>
            </div> 
            
            <button type="submit" class="btn btn-primary">Update</button> <a href="/progress-desain">Kembali</a>
        </form>
    </div>
</div>
@endsection

{{-- script ck editor --}}
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script>
    // untuk CKEditor
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>