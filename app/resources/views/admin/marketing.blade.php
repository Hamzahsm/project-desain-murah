@extends('admin.template.home')
@section('container-admin')
    <div class="container-fluid">
        <div class="row">
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 mt-4 border-bottom">
                <h3 class="text-secondary text-uppercase">Marketing</h3>
                </div>
            {{-- body --}}
                <div>
                    <div class="table-responsive col-lg-10"> 
                        {{-- alert --}}
                        @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>   
                        @endif 
                        @if (session()->has('deleteUser'))
                            <div class="alert alert-success" role="alert">
                                {{ session('deleteUser') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif 
                        
                        {{-- fitur search --}}
                        <div class="col-md-3 mt-4">
                            <form action="/daftar-marketing" method="GET">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Cari Marketing" name="search" value="{{ request('search') }}">
                                    <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
                                </div>
                            </form>
                        </div>

                        @if($users->count())
                        <table class="table table-hover table-bordered table-sm shadow mt-4">
                            <thead class="table-info">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Referral</th>
                                <th scope="col">Email</th>
                                <th scope="col">No.Telepon</th>
                                <th scope="col">Tgl Daftar</th>
                                <th scope="col">Jumlah Komisi</th>
                                <th scope="col">Klaim Komisi</th>
                                <th scope="col">Last Update</th>
                                <th scope="col">Aksi</th>      
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                <td>{{ $loop->iteration }}</td>
                                {{-- <td>
                                    <img src="{{ asset('storage/' . $user->image) }}" alt="{{ $user->name }}" width="100" height="100" class="img-fluid">
                                </td> --}}
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->referral }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->number }}</td>
                                {{-- <td>{{ $user->created_at->diffForHumans() }}</td> --}}
                                <td>{{ $user->created_at}}</td>
                                <td>{{ $user->komisi }}</td>
                                <td>{{ $user->klaim }}</td>
                                <td>
                                    @if($user->komisi)
                                        {{ $user->updated_at }}
                                    @else 
                                        <p class="fst-italic text-danger"><i class="bi bi-exclamation-triangle"></i> Belum diupdate</p>
                                    @endif
                                </td>
                                {{-- <td>
                                    <a href="/delete-user/{{ $user->username }}"><button class="btn btn-danger" onClick="return confirm('apakah anda yakin?')">Hapus</button></a>
                                </td>  --}}
                                <td>
                                    <a href="/edit-komisi/{{ $user->name }}">
                                        <i class="bi bi-pen ms-3"></i> Edit
                                    </a>
                                </td>
                                </tr>   
                                @endforeach
                            </tbody>
                        </table>
                        {{-- jika pencarian tidak ditemukan --}}
                        @else 
                        <p class="fst-italic text-secondary">Pencarian tidak ditemukan.</p>
                        @endif
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection