<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>健康管理 - お問い合わせ</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f4f4f4;
			color: #333;
		}

		.container {
			max-width: 500px;
			margin: 50px auto;
		}

		.card {
			background-color: rgba(255, 255, 255, 0.9);
			border-radius: 10px;
			box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
			padding: 40px;
			position: relative;
		}

		h1 {
			text-align: center;
			color: #007bff;
			margin-bottom: 30px;
		}

		.form-group {
			margin-bottom: 20px;
		}

		.form-group:last-child {
			margin-bottom: 0;
		}

		.form-group label {
			display: block;
			margin-bottom: 5px;
			font-weight: bold;
		}

		.form-group input[type="text"] {
			width: calc(100% - 40px);
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
			font-size: 16px;
		}

		.icon {
			position: absolute;
			top: 50%;
			right: 20px;
			transform: translateY(-50%);
		}

		.input-icon {
			display: inline-block;
			width: 20px;
			height: 20px;
			background-size: cover;
		}

		.input-icon.name {
			background-image: url('https://via.placeholder.com/20');
		}

		.input-icon.mail {
			background-image: url('https://via.placeholder.com/20');
		}

		.input-icon.submit {
			background-image: url('https://via.placeholder.com/20');
		}

		.submit-btn {
			width: 100%;
			padding: 10px;
			background-color: #007bff;
			color: #fff;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			transition: background-color 0.3s;
			font-size: 16px;
		}

		.submit-btn:hover {
			background-color: #0056b3;
		}
	</style>
</head>

<body>

	<div class="container">
		<div class="card">
			<h1>お問い合わせ</h1>
			<form action="write.php" method="post">
				<div class="form-group">
					<label for="name">お名前:</label>
					<input type="text" id="name" name="name" required>
					<div class="icon">
						<span class="input-icon name"></span>
					</div>
				</div>
				<div class="form-group">
					<label for="mail">メールアドレス:</label>
					<input type="text" id="mail" name="mail" required>
					<div class="icon">
						<span class="input-icon mail"></span>
					</div>
				</div>
				<div class="form-group">
					<input type="submit" value="送信" class="submit-btn">
					<div class="icon">
						<span class="input-icon submit"></span>
					</div>
				</div>
			</form>
		</div>
	</div>

</body>

</html>
