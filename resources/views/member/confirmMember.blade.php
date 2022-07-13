<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>入力内容確認画面</title>
</head>
<body>
	<div class="forms">
		<div class="round">
			<img src="{{ asset('images/Instagram_logo.png')}}">
			<form action="/member/create" method="post">
			@csrf
				<div>
					<label for="name">
						氏名 : {{ $inputs['name'] }}
						<input type="hidden" name="name" value="{{ $inputs['name'] }}">
					</label>
				</div>
				<div>
					<label for="phone">
						電話番号 : {{ $inputs['phone'] }}
						<input type="hidden" name="phone" value="{{ $inputs['phone'] }}">
					</label>
				</div>
				<div>
					<label for="mail">
						メールアドレス : {{ $inputs['email'] }}
						<input type="hidden" name="email" value="{{ $inputs['email'] }}">
					</label>
				</div>
				

				<div class="submit">
					<input type="submit" class="back" value="入力内容修正">
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
		font-size: 1.2em;
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
	.phone {
		width: 25%;
		height: 4%;
	}
	.pass {
		width: 25%;
		height: 4%;
	}

	.back {
		width: 25%;
		height: 4%;
		color: #ffffff;
		font-size: 1em;
		font-weight: bold;
		background-color: #fd5454;
		border: none;
		border-radius: 7px;
		cursor: pointer;
	}
	.send {
		width: 25%;
		height: 4%;
		color: #ffffff;
		font-size: 1em;
		font-weight: bold;
		background-color: #1e90ff;
		border: none;
		border-radius: 7px;
		cursor: pointer;
	}
</style>