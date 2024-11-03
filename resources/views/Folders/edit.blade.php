<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Update Folders</h1>
    <form action="{{route('categories.update',$folders->id)}}" method="post">
        @csrf
        @method('PATCH')

        <label for="">Name</label>
        <input type="text"name="Name" value="{{$folders->id}}">
        <br><br>
        <input type="submit" value="Update Folder">
    </form>

</body>
</html>