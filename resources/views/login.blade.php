<h1>login2 form</h1>
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
<form name="loginform" action="/login2" method="post">
	{{ csrf_field()  }}

	userid：<input type="text" name="userid" value="{{ old('userid')  }}"> <br />
	password：<input type="password" name="password" value="{{ old('password') }}">  <br />
	<button type="submit" name="action" value="send">login</button>
</form>
