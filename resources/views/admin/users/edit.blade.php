<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="{{'/users/'.$edit->id}}" method="POST" enctype="multipart/form-data">
		@csrf
		@method("PATCH")
		<input type="" name="name" value="{{$edit->name}}">
		<input type="" name="birth" value="{{$edit->birth}}">
		<input type="" name="username" value="{{$edit->username}}">
		<input type="" name="password" value="{{$edit->password}}">
		<input type="" name="email" value="{{$edit->email}}">
        <input type="" name="phone" value="{{$edit->phone}}">
        <input type="" name="role" value="{{$edit->role}}">
		<button type="submit">Update</button>
	</form>
</body>
</html>