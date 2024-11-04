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
            <h1 class="text text-center">All users</h1>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-12 col-lg-6">
        <a href="{{route('users.create')}}"class="btn btn-primary btn-sm">Create new user</a>
        </div>
    </div>
    
    <div class="row justify-content-center mb-4">
        <div class="col-12 col-lg-6">
        <table>
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

                <td>
                    <a href="{{route('users.show', $usera->id)}}"class="btn btn-sm btn-secondary">See user</a>
                    <a href="{{route('users.edit', $usera->id)}}"class="btn btn-sm btn-warning">Edit user</a>
                </td>
                <form action="{{route('users.destroy',$usera->id)}}"method="post">
                    @csrf
                    @method('Delete')
                    <input type="Submit"value="Delete category"class="btn btn-sm btn-warning">
                </form>
            </tr>

        @endforeach
    </tbody>
    </table>
        </div>
    </div>


    
    


</body>

</html>