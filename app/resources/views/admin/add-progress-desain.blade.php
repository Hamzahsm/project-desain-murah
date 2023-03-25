@extends('admin.template.edit')
@section('container-admin')
<div class="container mt-5">
    <h3 class="text-uppercase text-secondary"> Tambah Progress Desain </h3>

    <div class="col-lg-8 mt-3">
        <form action="/add-progress" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="referral"> Code Referral Marketing</label>
                <select name="referral_id" id="referral" class="form-select mt-2">
                    @foreach ($referrals as $referral)
                        <option value="{{ $referral->id }}" selected>{{ $referral->name }}</option>   
                    @endforeach 
                </select> 
            </div> 

            <div class="mb-3">
                <label for="user"> Marketing</label>
                <select name="user_id" id="user" class="form-select mt-2">
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}" selected>{{ $user->name }}</option>   
                    @endforeach
                </select> 
            </div> 

            <div class="mb-3">
                <label for="name">Klien</label>
                <input type="text" class="form-control mt-2 @error('title') is-invalid @enderror" id="name" name="name" required>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div> 

            <div class="mb-3">
                <label for="keterangan">Keterangan</label>
                <input type="text" class="form-control mt-2 @error('title') is-invalid @enderror" id="keterangan" name="keterangan" required>
                @error('keterangan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div> 
            
            <button type="submit" class="btn btn-primary">Update</button> <a href="/progress-desain">Kembali</a>
        </form>
    </div>
</div>
@endsection