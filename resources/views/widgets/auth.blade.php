<ul>
	<li><input type="email" class="form-control" name="email" value="{{ old('email') }}"></li>
			
	<li><input type="password" class="form-control" name="password"></li>
								
	<li><input type="checkbox" name="remember"> Remember Me</li>
									
	<li><button type="submit" class="btn btn-primary">Login</button></li>
	
	<li><a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a></li>
</ul>
					