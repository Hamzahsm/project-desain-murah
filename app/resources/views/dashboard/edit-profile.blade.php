@extends('dashboard.template.home')
@section('container-dashboard')
    <div class="container mt-5">
        <h3 class="text-uppercase text-secondary">Edit My Profile : <span class="text-danger">{{ $user->name }}</span> </h3>

        <div class="col-lg-8 mt-5">
            <form action="/update-profile/{{ $user->name }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="name" ><i class="bi bi-person"></i> Name</label>
                    <input type="text" class="form-control mt-2 @error('name') is-invalid @enderror" id="name" name="name" required value="{{ old('name', $user->name) }}">
                    @error('name')
                    <div class="invalid-feedback"> 
                        {{ $message }}
                    </div>
                    @enderror 
                </div> 

                <div class="mb-4">
                    <label for="username" ><i class="bi bi-person"></i> Username</label>
                    <input type="text" class="form-control mt-2 @error('username') is-invalid @enderror" id="username" name="username" required value="{{ old('username', $user->username) }}">
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div> 

                <div class="mb-4">
                    <label for="email" ><i class="bi bi-envelope-at"></i> email</label>
                    <input type="text" class="form-control mt-2 @error('email') is-invalid @enderror" id="email" name="email" required value="{{ old('email', $user->email) }}">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div> 
                
                <div class="mb-4">
                    <label for="number" ><i class="bi bi-telephone"></i> No. Telepone</label>
                    <input type="number" class="form-control mt-2 @error('number') is-invalid @enderror" id="number" name="number" required value="{{ old('number', $user->number) }}">
                    @error('number')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div> 

                <div class="mb-4">
                    <label for="referral" ><i class="bi bi-qr-code"></i> Referral Code</label>
                    <input type="text" class="form-control mt-2 @error('referral') is-invalid @enderror" id="referral" name="referral" required value="{{ old('referral', $user->referral) }}">
                    @error('referral')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div> 

                <div class="mb-4">
                    <label for="image" class="form-label @error('image') is-invalid @enderror"><i class="bi bi-image"></i> Foto Profile</label>
                    <input type="hidden" name="oldImage" value="{{ $user->image }}">
                    @if($user->image)
                        <img src="{{ asset('storage/' . $user->image) }}" alt="" class="image-preview img-fluid mb-3 col-sm-5 d-block">
                    @else
                    <img class="image-preview img-fluid mb-3 col-sm-5">
                    @endif
                    <input type="file" class="form-control" id="image" name="image" onChange="previewImage()">
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
    
                
                <button type="submit" class="btn btn-primary">Update</button> <a href="/my-profile/{{ $user->name }}">Kembali</a>
            </form>
        </div>
    </div>
@endsection

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