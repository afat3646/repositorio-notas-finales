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
        </tr>

    </thead>
    <tbody>
        @foreach ($categories as $category)
            <tr>
                <br>
                <td>{{$category->user_id}}</td>
                <br>
                <td>{{$category->Name}}</td>
            </tr>
        @endforeach

    </tbody>
    </table>


</body>

</html>