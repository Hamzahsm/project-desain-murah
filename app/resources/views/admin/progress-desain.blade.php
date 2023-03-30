@extends('admin.template.home')
@section('container-admin')
    <div class="container-fluid">
        <div class="row">
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 mt-4 border-bottom">
                <h3 class="text-secondary text-uppercase">Progress Desain</h3>
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
                        <a href="/add-progress-desain">
                            <i class="bi bi-plus-circle fs-3"></i>
                        </a>
                        <table class="table table-hover table-bordered table-sm mt-3 shadow">
                            <thead class="table-info">
                            <tr>
                                <th scope="col">No</th>
                                {{-- <th scope="col">Code Referral</th> --}}
                                <th scope="col">Nama Marketing</th>
                                <th scope="col">Nama Klien</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Created at</th>
                                <th scope="col">Update at</th>   
                                <th scope="col">Aksi</th>   
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($clients as $client)
                                <tr>
                                <td>{{ $loop->iteration }}</td>
                                {{-- <td>{{ $client->referral->name }}</td> --}}
                                <td>{{ $client->user->name }}</td>
                                <td>{{ $client->name }}</td>
                                <td> {!! $client->keterangan !!}</td>
                                <td>{{ $client->created_at }}</td>
                                <td>{{ $client->updated_at }}</td>
                                <td>
                                    <a href="/edit-progress-desain/{{ $client->name }}">
                                        <i class="bi bi-pen ms-3"></i> Edit
                                    </a>
                                </td>
                                </tr>   
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection