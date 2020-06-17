<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="{{'/admin/users/'.$edit->id}}" method="POST" enctype="multipart/form-data">
		@csrf
		@method("PATCH")
		<input type="" name="username" value="{{$edit->username}}">
        <input type="" name="password" value="{{$edit->password}}">
        <input type="" name="name" value="{{$edit->name}}">
        <input type="" name="class" value="{{$edit->class}}">
        <input type="" name="role" value="{{$edit->role}}">
		<button type="submit">Update</button>
	</form>

</body>
</html>