<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>custumer data</title>
	<style type="text/css">
		table,td,td,th{
			border: solid 1px black;
			padding: 5px;
			border-collapse: collapse;
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<th>სახელი</th>
			<th>გვარი</th>
			<th>ბიოგრაფია</th>
			<th>მისამართი</th>
			<th>ასაკი</th>
		</tr>
		<tr>
			@foreach($datas as $data)
				<td>{{ $data }}}</td>
			@endforeach
		</tr>
	</table>
</body>
</html>