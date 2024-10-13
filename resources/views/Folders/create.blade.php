<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=deivece-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible"content="ie=edge">
        <title>Document</title>
    </head>

    <body>
        
        <h1>Create folder</h1>
        
        
        <form action="{{route('folders.store')}}" method="post">
            @csrf

            <label for="">Name</label>
            <input type="text" name="name">
            <br><br><br>
            <input type="submit" value="Create folder">
        </form>
    </body>
</html>