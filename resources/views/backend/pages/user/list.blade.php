<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>List User</title>
	<link rel="stylesheet" href="">
	<style>
		table, th, td {
		    border: 1px solid black;
		    border-collapse: collapse;
		}
	</style>
</head>
<body>
	<h2>User List</h2>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Avatar</th>
				<th>Name</th>
				<th>Email</th>
				<th>Address</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($user as $item)
			<tr>
				<td>{{$item->id}}</td>
				<td><img src="{{asset($item->avatar)}}" style="width:30px;height:30px" alt=""></td>
				<td>{{$item->name}}</td>
				<td>{{$item->email}}</td>
				<td>{{$item->address}}</td>
				<td colspan="2">
					<a href="{{ asset('xem-thong-tin/'.$item->id)}}"><button type="button">View</button></a>
					<a href="{{ asset('cap-nhat-thong-tin/'.$item->id)}}"><button type="button">Edit</button></a>
					<a href="{{ asset('xoa-nguoi-dung/'.$item->id)}}"><button type="button">Delete</button></a>

				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<a href="{{ asset('them-moi-user') }}"><button type="button">Create</button></a>
</body>
</html>