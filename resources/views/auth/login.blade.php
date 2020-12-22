@extends('layouts.auth')

@section('content')

<section>
		<div class="box">
			<!--  -->
			<div class="form">
				<h2><img src="{{ asset('assets/images/logo-white.webp') }}" style="
    width: 185px;
    margin: 36px;
"></h2>
				<form method="POST" action="{{ route('login') }}">
				    
				          @if($errors->any())
                                {!! implode('', $errors->all('<div>:message</div>')) !!}
                           @endif
				    
				    @csrf
					<div class="inputBx">
						 <input id="email" placeholder="{{ __('E-Mail') }}" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
						<img src="{{ asset('admin/assets/img/user.png') }}" alt="User Icon">

					</div>
					<div class="inputBx">
						 <input id="password" placeholder="{{ __('Mot de Passe') }}" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
						<img src="{{ asset('admin/assets/img/lock.png') }}" alt="User Icon">
	
					</div>
					<label class="remember"><input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>Remember Me</label>
					<div class="inputBx">
				<!--		 <button type="submit" class="btn btn-primary btn-block">
                            {{ __('Login') }}
                        </button>-->
                        
                        <input type="submit" value="{{ __('Login') }}">
                        
					</div>
				</form>
				<p>Forget <a href="#">Password</a></p>
				<p>Need an <a href="#">Account</a></p>
			</div>
		</div>
	</section>

<!--
<form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="form-group row">

        <div class="col-md-12">
            <input id="email" placeholder="{{ __('E-Mail') }}" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-12">
            <input id="password" placeholder="{{ __('Mot de Passe') }}" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary btn-block">
                {{ __('Login') }}
            </button>
        </div>
  
    </div>
</form>-->
@endsection
