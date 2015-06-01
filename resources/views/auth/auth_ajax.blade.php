<ul>
	<li><input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"></li>
			
	<li><input id="pass" type="password" class="form-control" name="password"></li>
								
	<li><input type="checkbox" name="remember"> Remember Me</li>
									
	<li><button id="auth-login" class="btn btn-primary">Login</button></li>
	
	<li><a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a></li>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
</ul>
<div id="errors">
</div>									