<h1>user register form</h1>
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
<form name="userregisterform" action="/user/register" method="post">
	{{ csrf_field()  }}

	userid：<input type="text" name="userid" value="{{ old('userid')  }}"> <br />
    name：<input type="text" name="name" value="{{ old('name')  }}"> <br />
	password：<input type="password" name="password" value="{{ old('password') }}">  <br />

	<button type="submit" name="action" value="send">登録する</button>
</form>
