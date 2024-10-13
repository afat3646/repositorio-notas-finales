<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=deivece-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>All users</h1>
    <a href="{{route('users.create')}}">Create new user</a>
    <table>

    </table>
    <thead>
        <tr>
            <th>name</th>
            <th>email</th>
            <th>username</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $usera)
            <tr>
                <br>
                <td>{{$usera->name}}</td>
                <br>
                <td>{{$usera->email}}</td>
                <br>
                <td>{{$usera->username}}</td>
            </tr>

        @endforeach
    </tbody>


</body>

</html>