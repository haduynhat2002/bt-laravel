<!DOCTYPE html>
<html lang="en">
<head>
    <title>List Products</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{url('https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
</head>
<body>
@if(session('message'))
    <div class="w3-panel w3-green w3-display-container">
  <span onclick="this.parentElement.style.display='none'"
        class="w3-button w3-large w3-display-topright">&times;</span>
        <h3>Success!</h3>
        <p>{{session('message')}}</p>
    </div>
@endif
@if(session('remove'))
    <div class="w3-panel w3-green w3-display-container">
        <span onclick="this.parentElement.style.display='none'" class="w3-button w3-large w3-display-topright">&times;</span>
        <h3>Success!</h3>
        <p>{{session('remove')}}</p>
    </div>
@endif
<div class="container">
    <table class="table">
        <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Address</th>
            <th>User Name</th>
        </tr>
        </thead>
        <tbody>
        @foreach($list as $events)
            <tr>
                <td>{{$events->firstName}}</td>
                <td>{{$events->lastName}}</td>
                <td>{{$events->phone}}</td>
                <td>{{$events->email}}</td>
                <td>{{$events->address}}</td>
                <td>{{$events->username}}</td>
                <td class="center hidden-phone">
                    <a class="btn btn-primary"
                       href="/user/edit/{{$events->id}}">Update</a>&nbsp;&nbsp;
                    <form action="/user/destroy/{{$events->id}}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn px-3  btn-danger" href="#" title="Delete"
                                onclick="return confirm('Are you sure')">Delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
