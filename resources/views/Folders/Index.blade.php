<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=deivece-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible"content="ie=edge">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                <h1 class="text text-center">All folders</h1>
                </div>
            </div>
        </div>
       <div class="row justify-content-center mb-4">
       <a href="{{route('folders.create')}}"  class="btn btn-primary btn-sm">Create new folder</a>
       </div>
       <div class="row justify-content-center">
        <div class="col-12 col-lg-6">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>actions</th>
                    <th>delete</th>
                
                </tr>
            </thead>
            <tbody>
            @foreach ($folders as $Folder)
            <tr>
                <br>
                <td>{{$Folder->id}}</td>
                <br>
                <td>{{$Folder->name}}</td>
                <td>
                    <a href="{{route('folders.show', $Folder->id)}}"method="post" class="btn btn-sm btn-primary">See folder</a>
                    <a href="{{route('folders.edit', $Folder->id)}}"method="post" class="btn btn-sm btn-warning">Edit folder</a>
                </td>
                <td>
                <form action="{{route('folders.destroy', $Folder->id)}}"method="post">
                @csrf
                @method('delete')
                <input type="Submit"value="Delete category" class="btn btn-sm btn-danger">
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