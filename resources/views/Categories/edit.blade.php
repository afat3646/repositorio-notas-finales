<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=deivece-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible"content="ie=edge">
        <title>Document</title>
    </head>

    <body>
        
        <h1>Update Category</h1>
        
        
        <form action="{{route('categories.update',$category->id)}}" method="post">
            @csrf
            @method('PATCH')

            <label for="">Name</label>
            <input type="text" name="name" value="{{$category->name}}">
            <br><br><br>

            <label for="">Color</label>
            <input type="color" name="Color"  value="#{{$category->color}}">
            <br><br>
            <input type="submit" value="Update category">



        </form>


    </body>
</html>