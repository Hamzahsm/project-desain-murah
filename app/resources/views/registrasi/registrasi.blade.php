@extends('./template.home')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <main class="form-registration w-100 m-auto">
                <h1 class="h3 fw-bold text-center text-uppercase mb-5 mt-4">Registrasi</h1>
                <form action="/registrasi-user" method="POST" enctype="multipart/form-data">
                    {{-- pasang keamanan  --}}
                    @csrf
                    <div class="form-floating">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="name" required value={{ old('name') }} >
                        <label for="name"><i class="bi bi-person"></i> Name</label>
                        @error('name')
                            <div class="invalid-feedback">  
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="username" required value={{ old('username') }}>
                        <label for="username"><i class="bi bi-person"></i> Username</label>
                        @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="email" class="form-control @error('email') @enderror" id="email" name="email" placeholder="email" required value={{ old('email') }}>
                        <label for="email"><i class="bi bi-envelope-at"></i> Email</label>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="number" class="form-control @error('number') @enderror" id="number" name="number" placeholder="No. Telepon" required value={{ old('number') }}>
                        <label for="number"><i class="bi bi-telephone"></i> No. Telepon</label>
                        @error('number')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="text" class="form-control @error('referral') @enderror" id="referral" name="referral" placeholder="No. Telepon" required value={{ old('referral') }}>
                        <label for="referral"><i class="bi bi-qr-code"></i> Referral Code</label>
                        @error('referral')
                        <div class="invalid-feedback"> 
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="password" class="form-control @error('password') @enderror" id="password" name="password" placeholder="password" required>
                        <label for="password"><i class="bi bi-key"></i> Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div> 

                    <div class="mb-3 mt-3">
                        <label for="image" class="form-label @error('image') is-invalid @enderror"><i class="bi bi-image"></i> Foto (150x150)</label>
                        <img class="image-preview img-fluid mb-3 col-sm-5">
                        <input type="file" class="form-control" id="image" name="image" onChange="previewImage()">
                        @error('image')
                            <div class="invalid-feedback"> 
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Daftar Sekarang</button>
                </form>

                <small class="d-block text-center mt-3 text-muted"><i class="bi bi-question-circle"></i> Sudah memiliki akun ? <a href="/login" class="text-decoration-none"> Login sekarang </a></small>
            </main>
        </div>
    </div>
</div>

<script>
        // script untuk preview image
        function previewImage(){
        const image = document.getElementById('image');
        const imagePreview = document.querySelector('.image-preview');

        imagePreview.style.display = 'block'; 

        // mengambil gambar
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imagePreview.src = oFREvent.target.result;
        }
    }

</script>
     
@endsection
