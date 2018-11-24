@extends('layouts.loginTemp')

@section('content')





<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
				<form class="login100-form validate-form" method="POST"  action="{{ route('login') }}">
					<span class="login100-form-title p-b-70 method="POST" action="{{ route('login') }}"">
						لوحة التحكم
					</span>
					<span class="login100-form-avatar">
						<img src="dist/img/admin.png" alt="AVATAR">
					</span>
                   

                        @csrf

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter username">
						<input class="input100"  type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
						<span class="focus-input100" data-placeholder="اسم المستخدم" style="direction:rtl"></span>
                        @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                    </div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input class="input100" type="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required> 
						<span class="focus-input100" data-placeholder="كلمة المرور" style="direction:rtl"></span>


                        @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                
                	</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn" style="font-size:16pt">
                        {{ __('تسجيل الدخول') }}
						</button>
                       
					</div>

				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>





@endsection
