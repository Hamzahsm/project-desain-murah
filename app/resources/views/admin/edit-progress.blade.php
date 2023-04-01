@extends('admin.template.edit')
@section('container-admin')
    <div class="container mt-5">
        <h3 class="text-uppercase text-secondary">Edit Progress Desain</h3>

        <div class="col-lg-8 mt-5">
            <form action="/update-progress/{{ $client->name }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- <div class="mb-3">
                    <label for="user" class="fw-bold"> Nama Marketing</label>
                    <select name="user_id" id="user" class="form-select mt-2">
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}" selected>{{ $user->name }}</option>   
                        @endforeach
                    </select>
                </div>  --}}

                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Nama Klien</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $client->name }}">
                </div>

                <div class="mb-3">
                    <label for="title" class="form-label fw-bold">Keterangan</label>
                    {{-- <input type="text" class="form-control mt-2 @error('title') is-invalid @enderror" id="komisi" name="komisi" required value="{{ old('komisi', $client->keterangan) }}"> --}}
                    <input id="body" type="hidden" name="keterangan" value="{{ old('keterangan', $client->keterangan) }}">
                    <trix-editor input="body"></trix-editor>
                    @error('komisi')
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
