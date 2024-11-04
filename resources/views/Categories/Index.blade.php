<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=deivece-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
            <h1 class="text text-center">All Categories</h1>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mb-4">
        <div class="col-12 col-lg-6 text-end">
        <a href="{{route('categories.create')}}" class="btn btn-primary btn-sm">Create new category</a>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-12 col-lg-6">
        <table  class="table table-striped">

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
            <td>{{$category->id}}</td>
            <td>{{$category->Name}}</td>
            <td>
                <a href="{{route('categories.show', $category->id)}}"class="btn btn-sm btn-secondary">See categories</a> 
                <a href="{{route('categories.edit', $category->id)}}"class="btn btn-sm btn-warning">edit categories</a> 
            </td>
            <td>
            <form action="{{route('categories.destroy', $category->id)}}"method="post">
            @csrf
            @method('Delete')
            <input type="Submit"value="Delete category"class="btn btn-sm btn-danger">
            </form>
            </td>
           
        </tr>
    @endforeach

    </tbody>
    </table>

    </div>
    </div>

</body>

</html>