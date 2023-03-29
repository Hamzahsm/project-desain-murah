@extends('dashboard.template.home')
@section('container-dashboard')
    <div class="container">
        <h3 class="text-center text-uppercase mb-4"><span class="text-danger">Profil</span> : {{ $user->name }}</h3>
        <table class="table table-hover table-bordered">
            <tbody>
                <tr>
                    <th scope="row">Nama</th>
                    <td>{{ $user->name }}</td>
                </tr>
                <tr>
                    <th scope="row">Username</th>
                    <td>{{ $user->username }}</td>
                </tr>
                <tr>
                    <th scope="row">Email</th>
                    <td>{{ $user->email }}</td>
                </tr>
                <tr>
                    <th scope="row">No. Telepon</th>
                    <td>{{ $user->number }}</td>
                </tr>
                <tr>
                    <th scope="row">Referral</th>
                    <td>{{ $user->referral }}</td>
                </tr>
                <tr>
                    <th scope="row">Anggota sejak</th>
                    <td>{{ $user->created_at->diffForHumans() }}</td>
                </tr>
                <tr>
                    <th scope="row">Foto</th>
                    <td><img src="{{ asset('storage/' . $user->image) }}" alt="{{ $user->name }}" width="70" height="70"></td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection  