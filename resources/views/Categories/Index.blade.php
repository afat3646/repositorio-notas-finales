<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=deivece-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <h1>All Categories</h1>
    <a href="{{route('categories.create')}}">Create new category</a>
    <table>

    </table>

    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Actions</th>
            <th>Delete</th>
        </tr>

    </thead>
    <tbody>
        @foreach ($categories as $category)
            <tr>
                <br>
                <td>{{$category->id}}</td>
                <br>
                <td>{{$category->Name}}</td>
                <br>
                <td>
                    <a href="{{route("categories.show", $category->id)}}">See categories</a>
                    
                    <a href="{{route("categories.edit", $category->id)}}">edit categories</a>
                </td>
                <form action="{{route('categories.destroy', $category->id)}}"method="post">
                @csrf
                @method('delete')
                <input type="Submit"value="Delete category">
                </form>
               
            </tr>
        @endforeach

    </tbody>
    </table>


</body>

</html>