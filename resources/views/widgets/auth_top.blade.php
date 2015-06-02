
@if(Auth::user())
	<a class="auth-ico" id="user-top-menu">
	<img src="/images/auth-ico.png">
	<span>{{Auth::user()->name}}</span>
</a>
@else
<a class="auth-ico" id="auth-run">
	<img src="/images/auth-ico.png">
	<span>Авторизация</span>
</a>
@endif
