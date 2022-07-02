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
					<label for="tel_mail">
						<input type="email" placeholder="電話番号、メールアドレス" class="tel_mail" required>
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
			<a href="/member/createMember" class="registration">登録する</a>
		</div>
	</div>
</body>
</html>

<style>
	body {
		width: 100%;
		max-width: 1280px;
		margin: auto;
		background: #f5f5f5;
	}
	.round {
		padding: 20px;
		border: 2px solid #dcdcdc;
		background: #ffffff;
	}
	.forms {
		text-align:center;
		padding-top: 20%;
	}
	img {
		width: 18%;
	}
	div {
		padding-top: 2%;
	}
	.tel_mail {
		width: 25%;
		height: 4%;
	}
	.pass {
		width: 25%;
		height: 4%;
	}
	.send {
		width: 25%;
		height: 4%;
		color: #ffffff;
		font-size: 1.2em;
		font-weight: bold;
		background-color: #1e90ff;
		border: none;
		border-radius: 7px;
		cursor: pointer;
	}
	.account_registration {
		text-align:center;
		margin: auto;
		padding-top: 1%;
	}
	.sentence {
		font-size: 1.1em;
	}
	.registration {
		font-size: 1.2em;
		font-weight: bold;
		color: #1e90ff;
		text-decoration: none;
		cursor: pointer;
	}
</style>