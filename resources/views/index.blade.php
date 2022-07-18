<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
</head>

<body>
	<h2>トップページ</h2>
	<form action="/" method="post">
		<table>
			@csrf
			<tr>
				<td>氏名</td>
			</tr>
			<tr>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>メールアドレス</td>
			</tr>
			<tr>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td><button>送信する</button></td>
		</table>
	</form>
</body>
</html>