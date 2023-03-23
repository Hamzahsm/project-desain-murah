<div class="p-2">
    {{-- <p>Link verifikasi akun berhasil di kirim. Silahkan cek email...</p>
    <p>Jika sudah tidak muncul , coba untuk <a href="/resend-email">meminta ulang link verifaciton</a></p>
    <p><a href="/">kembali</a></p> --}}

    @if (session('resent'))
    <div class="alert alert-success" role="alert">
        Link verifikasi berhasil di kirim pada email yang telah di daftarkan. Silahkan melakukan aktivasi akun. 
    </div>
    @endif

Jika anda tidak mendapatkannya selama 5 menit, Minta ulang link verifikasi
<form action="{{ route('verification.resend') }}" method="POST" class="d-inline">
    @csrf
    <button type="submit" class="d-inline btn btn-link p-0">
        Minta ulang link verifikasi akun
    </button>.
</form>
</div>