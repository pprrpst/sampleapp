<html>
こんにちは！

@if (Auth::check())
	{{ \Auth::user()->name }} さん <br />
	<a href="/auth/logout">ログアウト</a>
@else
	guest さん <br />
	<a href="/auth/login">ログイン</a> <br />
	<a href="/auth/register">会員登録</a>
@endif
<br />
{{ phpinfo() }}
</html>

