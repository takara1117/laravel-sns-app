<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>登録画面</title>
</head>
<body>
	<div class="forms">
		<div class="round">
			<img src="{{ asset('images/Instagram_logo.png')}}">
			<form action="/member/confirmMember" method="post">
				<div>
					<label for="name">
						<input type="text" placeholder="氏名" class="name">
					</label>
				</div>
				<div>
					<label for="mail">
						<input type="email" placeholder="メールアドレス" class="mail">
					</label>
				</div>
				<div>
					<label for="tel">
						<input type="tel" placeholder="電話番号" class="tel">
					</label>
				</div>
				<div>
					<label for="pass">
						<input type="password" placeholder="パスワード" class="pass">
					</label>
				</div>

				<div class="submit">
					<input type="submit" class="send" value="登録する">
				</div>
			</form>
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
	.name {
		width: 25%;
		height: 4%;
	}
	.mail {
		width: 25%;
		height: 4%;
	}
	.tel {
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
</style>