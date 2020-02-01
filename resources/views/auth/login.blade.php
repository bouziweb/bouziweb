@extends('layouts.app')
@section('content')
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/img-01.jpg');">
			<div class="wrap-login100 p-t-190 p-b-30">
				<form class="login100-form validate-form"  method="POST" action="{{ route('login') }}">
					@csrf  
					
					<div class="login100-form-avatar">
						<img src="images/main.png" alt="InstaBouzi">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						BouziWeb
					</span>
                   
					<div class="wrap-input100 validate-input m-b-10">
						<input id="email" class="input100" type="text" name="email" placeholder="Email" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"required autofocus>
						@if ($errors->has('email'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('email') }}</strong>
							</span>
				     	@endif
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10">
						<input id="password" class="input100" type="password"  placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required >
						@if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="container-login100-form-btn p-t-10">
						
						<button type="submit" class="login100-form-btn">
							{{ __('Login') }}
						</button>
					</div>

					<div class="text-center w-full p-t-25 p-b-230">
							<a class="txt1" href="{{ route('register') }}">
									Create new account
									<i class="fa fa-long-arrow-right"></i>						
								</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
@endsection

	

