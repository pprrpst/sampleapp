<html>
こんにちは！

@if (Auth::check())
	{{ \Auth::user()->name }} さん <br />
	<a href="/auth/logout">ログアウト</a><br />
	<a href="/auth/register">会員登録</a><br />
	<a href="/mock_4">製品規格</a><br />
@else
	guest さん <br />
	<a href="/auth/login">ログイン</a> <br />
@endif
<br />
{{ phpinfo() }}
</html>

