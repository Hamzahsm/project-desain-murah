@extends('dashboard.template.home')
@section('container-dashboard')
    <div class="container">
        <h3 class="text-center text-uppercase mb-4"><span class="text-danger">Profil</span> : {{ $user->name }}</h3>

        <table class="table table-hover table-bordered">
            <tbody>
                <tr>
                    <th scope="row"><i class="bi bi-person"></i> Nama</th>
                    <td>{{ $user->name }}</td>
                </tr>
                <tr>
                    <th scope="row"><i class="bi bi-person"></i> Username</th>
                    <td>{{ $user->username }}</td>
                </tr>
                <tr>
                    <th scope="row"><i class="bi bi-envelope-at"></i> Email</th>
                    <td>{{ $user->email }}</td>
                </tr>
                <tr>
                    <th scope="row"><i class="bi bi-telephone"></i> No. Telepon</th>
                    <td>{{ $user->number }}</td>
                </tr>
                <tr>
                    <th scope="row"><i class="bi bi-qr-code"></i> Referral</th>
                    <td>{{ $user->referral }}</td>
                </tr>
                <tr>
                    <th scope="row"><i class="bi bi-person"></i> Anggota sejak</th>
                    <td>{{ $user->created_at->diffForHumans() }}</td>
                </tr>

                <tr>
                    <th scope="row"><i class="bi bi-image"></i> Foto</th>
                    <td><img src="{{ asset('storage/' . $user->image) }}" alt="{{ $user->name }}" width="70" height="70"></td>
                </tr>

                <tr>
                    <th scope="row"><i class="bi bi-currency-dollar"></i> Jumlah Komisi Yang Berhasil didapat</th>
                    <td> @if($user->komisi)
                        {{ $user->komisi }}
                        @else 
                        <p class="text-danger">Oopps, nampaknya Anda belum mendapatkan klien. Saatnya dapatkan klien!</p>
                        @endif
                    </td>
                </tr>
                
                <tr>
                    <th scope="row">Aksi</th>
                    <td><a href="/edit-profile/{{ $user->name }}">
                            Edit Profile
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection  