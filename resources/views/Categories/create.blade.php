<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=deivece-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible"content="ie=edge">
        <title>Document</title>
    </head>

    <body>
        
        <h1>Create Category</h1>
        
        
        <form action="{{route('categories.store')}}" method="post">
            @csrf

            <label for="">Name</label>
            <input type="text" name="name">
            <br><br><br>

            <label for="">Color</label>
            <input type="color" name="Color" >
            <br><br>
            <input type="submit" value="Create category">



        </form>


    </body>
</html>