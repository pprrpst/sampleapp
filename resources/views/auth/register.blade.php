input form <br />

<form name="registform" action="/auth/register" method="post">
	{{ csrf_field() }}
	名前：<input type="text" name="name"> <span>{{ $errors->first('name')  }}</span> <br />
	mail：<input type="text" name="email"> <span>{{ $errors->first('email')  }}</span> <br />
	pass：<input type="password" name="password"> <span>{{ $errors->first('password')  }}</span> <br />
	pass_conf：<input type="password" name="password_confirmation"> <span>{{ $errors->first('password_confirmation')  }}</span> <br />
	<button type="submit" name="action" value="send">send</button>
</form>
