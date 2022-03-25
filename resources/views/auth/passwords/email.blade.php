
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <link href="{{ asset('css/auth.css') }}" rel="stylesheet">
	<title>Glassmorphism Login Form</title>
</head>
<body>
	<section>
		<div class="color"></div>
		<div class="color"></div>
		<div class="color"></div>
		<div class="box">
			<div class="square" style="--i: 0;"></div>
			<div class="square" style="--i: 1;"></div>
			<div class="square" style="--i: 2;"></div>
			<div class="square" style="--i: 3;"></div>
			<div class="square" style="--i: 4;"></div>
			<div class="container">
				<div class="form">
					<h2> <div class="card-header">{{ __('Reset Password') }}</div></h2>
                    <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif                    
					<p>Enter your email below to recieve your</p>
					<p>password reset instruction</p>
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="inputBox">
                            <label for="email">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="inputBox">
                            <div class="btn">
                                <button type="submit" class="btn_send">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
				</div>
			</div>
		</div>
	</section>
</body>
</html>

