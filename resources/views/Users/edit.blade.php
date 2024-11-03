<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Update User</h1>
    <form action="{{route('users.update',$usere->id)}}">
        @csrf
        @method('PATCH')

        <label for="">name</label>
        <input type=""name="Name" value="{{$usere->name}}">
        <br><br><br>

        <label for="">username</label>
        <input type=""name="Username"value="{{$usere->username}}">
        <br><br><br>

        <label for="">email</label>
        <input type="" name="Email"value="{{$usere->email}}">
        <br><br><br>

    </form>
</body>
</html>