<div class="col-md-4 col-sm-12">

    <div class="card shadow-lg">

        <div class="card-body">

            <div class="text-center login-logo">

                <img src="{{ url('/') }}/img/logo/logo-san-jose.png" class="img-responsive img-fluid" alt="logo san josé del sur">   

            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <!-- input Email -->
                <div class="input-group mb-3">
                    
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus >

                    
                    <div class="input-group-append">

                        <div class="input-group-text">
                            <span class="fas fa-envelope icon-login"></span>
                        </div>

                    </div>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror


                </div>

                <!-- input password -->
                <div class="input-group mb-3">

                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="input-group-append">

                        <div class="input-group-text">
                            <span class="fas fa-lock icon-login"></span>
                        </div>

                    </div>
                </div>


                
                {{-- Boton ingresar --}}
                <div> 
                    <button type="submit" class="btn btn-outline-primary btn-block">Ingresar</button>
                </div>

            </form>
        </div>
        <div class="card-footer">
            <p class="mt-2 mb-3">
                <a href="#" class="float-right mb-2">¿Olvidó su contraseña?</a>
               
            </p>

        </div>
    </div>
</div>