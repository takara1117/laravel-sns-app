<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
	<div class="forms">
		<div class="round">
			<img src="{{ asset('images/Instagram_logo.png')}}">
			<form action="#">
				<div>
					<label for="mail">
						<input type="email" placeholder="メールアドレス" class="mail" required>
					</label>
				</div>
				<div>
					<label for="pass">
						<input type="password" placeholder="パスワード" class="pass" required>
					</label>
				</div>
				

				<div class="submit">
					<input type="submit" class="send" value="ログイン">
				</div>
			</form>
		</div>
	</div>
	<div class="account_registration">
		<div class="round">
			<p class="sentence">アカウントをお持ちでないですか？</p>
			<a href="#" class="registration">登録する</a>
		</div>
	</div>
</body>
</html>

