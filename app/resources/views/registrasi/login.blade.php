@extends('./template.home')

@section('container')

    <div class="container mt-5">
        <div class="row justify-content-center"> 
            <div class="col-lg-5">
                {{-- alert --}}
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        {{-- <p> Bagi yang mendaftar sebagai <span class="fw-bold">Owner</span> silahkan hubungi <a href="https://api.whatsapp.com/send?phone=082145352019&text=Assalamualaikum,Saya%20baru%20saja%20mengisi%20form%20registrasi%20owner%20dengan%20email%20....%20masukkan email anda" class="alert-link">Customer Service</a> untuk mendapatkan fitur unggulan</p> --}}
                        <p> Bagi yang mendaftar sebagai <span class="fw-bold">Owner</span> silahkan hubungi <a href="https://api.whatsapp.com/send?phone=082331531476&text=Assalamualaikum,Saya%20baru%20saja%20mengisi%20form%20registrasi%20owner%20dengan%20email%20....%20masukkan email anda" class="alert-link">Customer Service</a> untuk mendapatkan fitur unggulan</p>
                        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button> 
                    </div>   
                @endif 

                @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button> 
                </div>   
                @endif
                <main class="form-signin w-100 m-auto">
                    <div class="text-center">
                        <h1 class="h3 fw-bold text-uppercase mb-3 mt-4">Please Login</h1>
                    </div>
                    <form method="post" action="{{ route('login.perform') }}">
                
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        
                        {{-- <h1 class="h3 mb-3 fw-normal">Login</h1> --}}
                    
                        <div class="form-group form-floating mb-3 mt-5">
                            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
                            <label for="floatingName"><i class="bi bi-person"></i> Email or Username</label>
                            @if ($errors->has('username'))
                                <span class="text-danger text-left">{{ $errors->first('username') }}</span> 
                            @endif
                        </div>
                        
                        <div class="form-group form-floating mb-3">
                            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
                            <label for="floatingPassword"><i class="bi bi-key"></i> Password</label>
                            @if ($errors->has('password'))
                                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    
                        <div class="form-group mb-3">
                            <label for="remember">Remember me</label>
                            <input type="checkbox" name="remember" value="1">
                        </div>
                    
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                    
                    </form>

                    <small class="d-block text-center mt-3 text-muted"><i class="bi bi-question-circle"></i> Tidak memiliki akun ? <a href="/registrasi" class="text-decoration-none"> Daftar sekarang </a></small>
                </main>
            </div>
        </div>
    </div>

@endsection