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
			<form action="/member/create" method="post">
			@csrf
				<div>
					<label for="name">
						<input type="text" name="name" placeholder="氏名" class="name" value="{{old('name')}}">
					</label>
				</div>
				<div class="err_msg">
					@if ($errors->has('name'))
					{{$errors->first('name')}}
					@endif
				</div>

				<div>
					<label for="phone">
						<input type="phone" name="phone" placeholder="電話番号" class="phone" value="{{old('phone')}}">
					</label>
				</div>
				<div class="err_msg">
					@if ($errors->has('phone'))
					{{$errors->first('phone')}}
					@endif
				</div>

				<div>
					<label for="mail">
						<input type="email" name="email" placeholder="メールアドレス" class="mail" value="{{old('email')}}">
					</label>
				</div>
				<div class="err_msg">
					@if ($errors->has('email'))
					{{$errors->first('email')}}
					@endif
				</div>

				<div>
					<label for="pass">
						<input type="password" name="password" placeholder="パスワード" class="pass">
					</label>
				</div>
				<div class="err_msg">
					@if ($errors->has('password'))
					{{$errors->first('password')}}
					@endif
				</div>

				<div>
					<label for="confirmPass">
						<input type="password" name="confirmPassword" placeholder="確認パスワード" class="confirmPass">
					</label>
				</div>
				<div class="err_msg">
					@if ($errors->has('confirmPassword'))
					{{$errors->first('confirmPassword')}}
					@endif
				</div>

				<div class="submit">
					<input type="submit" class="send" value="入力内容確認">
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
		padding-top: 1%;
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
	.confirmPass {
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

	.err_msg {
  		color: red;
	}
</style>