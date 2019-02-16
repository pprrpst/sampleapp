<h1>login form</h1>
@isset($message)
	{{ $message }}
@endisset

<form name="loginform" action="/auth/login" method="post">
	{{ csrf_field()  }}

	mail：<input type="text" name="email" value="{{ old('email')  }}"> <br />
	pass：<input type="password" name="password" value="{{ old('password') }}">  <br />
	<button type="submit" name="action" value="send">login</button>
</form>
