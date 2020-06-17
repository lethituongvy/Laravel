<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="/css/login.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css">
	<style>
		html,
		body {
			background-image: url('https://i.ytimg.com/vi/I5ixNZMqkBA/hqdefault.jpg');
			background-size: cover;
			background-repeat: no-repeat;
			height: 100%;
			font-family: 'Numans', sans-serif;
		}
	</style>
</head>

<body>
	<center>
		<div class="card-body">
			<form action="{{'/admin/animals/'.$edit->id}}" method="POST" enctype="multipart/form-data">
				@csrf
				@method("PATCH")
				<!-- <button type="submit">Update</button> -->
				<div class="input-group form-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fas fa-user"></i></span>
					</div>
					<input type="text" name="title" value="{{$edit->title}}">
				</div>
				<div class="input-group form-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="far fa-prescription"></i></span>
					</div>
					<input type="text" name="description" value="{{$edit->description}}">
				</div>
				<div class="input-group form-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fas fa-usd-square"></i></span>
					</div>
					<input type="text" name="price" value="{{$edit->price}}">
				</div>
				<div class="input-group form-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="far fa-image"></i></span>
					</div>
					<input type="file" name="image">
				</div>
				<div class="row align-items-center remember">
					<input type="checkbox">Remember Me
				</div>
					<div class="form-group">
						<input type="submit" value="Update" class="btn float-right login_btn">
					</div>
			</form>
		</div>
	</center>
</body>

</html>