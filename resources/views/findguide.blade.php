<!DOCTPE html>
<html>
<head>
<title>View Guide Records</title>
</head>
<body>
<table border = "1">
<tr>
<td>Id</td>
<td> Name</td>
<td>address</td>
<td>Status </td>
<td>mobile</td>
</tr>
@foreach ($users as $user)
<tr>
<td>{{ $user->id }}</td>
<td>{{ $user->name }}</td>
<td>{{ $user->address }}</td>
<td>{{ $user->true }}</td>
<td>{{ $user->mobile }}</td>
</tr>
@endforeach
</table>
</body>
</html>