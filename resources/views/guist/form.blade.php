<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>document</title>
</head>
<body>
	<form action="{{ route('postmethod') }}" method="POST">
		@csrf
		<div>
			<label>შეიყვანეთ სახელი</label>.
			<input type="text" name="fname">
		</div>
		<div>
			<label>შეიყვანეთ გვარი</label>
			<input type="text" name="lname">
		</div>
		<div>
			<label>შეყვანეთ მისამართი</label>
			<input type="text" name="address">
		</div>
		<div>
			<label>ბიოგრაფია</label>
			<textarea name="biography"></textarea>
		</div>
		<div>
			<label>შეიყვანეთ ასაკი</label>
			<input type="age" name="age">
		</div>
		<button>შენახვა</button>
	</form>
</body>
</html>