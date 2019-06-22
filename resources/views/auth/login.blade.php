<h1>login form</h1>
@isset($message)
	{{ $message }}
@endisset
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form name="loginform" action="/auth/login" method="post">
	{{ csrf_field()  }}

	mail：<input type="text" name="email" value="{{ old('email')  }}"> <br />
	pass：<input type="password" name="password" value="{{ old('password') }}">  <br />
	<button type="submit" name="action" value="send">login</button>
</form>
