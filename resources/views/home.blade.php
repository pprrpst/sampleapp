<html>
こんにちは！

@if (Auth::check())
	{{ \Auth::user()->name }} さん <br />
	<a href="/auth/logout">ログアウト</a><br />
	<a href="/auth/register">会員登録</a><br />
	<a href="/mock_4">製品規格</a><br />

	<a href="/logout2">ログアウト2</a><br />
@else
	guest さん <br />
	<a href="/auth/login">ログイン</a> <br />
	<a href="/login2">ログイン２</a> <br />
@endif


<br />
{{--{{ var_dump( Auth::user() ) }}--}}
{{ Auth::user() }}
@php
    $user = Auth::user();
    var_dump($user->name);
@endphp
<br />
{{ var_dump(request()->session()->getId() ) }}
<br />
{{ var_dump(request()->session()->all() ) }}

<br />
{{ phpinfo() }}
</html>

