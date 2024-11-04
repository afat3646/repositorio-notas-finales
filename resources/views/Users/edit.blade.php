<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
            <h1 class="text text-center">Update User</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col"class="text text-center">
            <form action="{{route('users.update',$usere->id)}}"method="post" class="text text-center" >
        @csrf
        @method('PATCH')

        <label for="">name</label>
        <input type=""name="Name" value="{{$usere->name}}">
        <br><br><br>

        <label for="">username</label>
        <input type=""name="Username"value="{{$usere->username}}">
        <br><br><br>

        <label for="">email</label>
        <input type="" name="Email"value="{{$usere->email}}" class="btn btn-sm btn-success">
        <br><br><br>

    </form>

            </div>
        </div>
    </div>
    
    
</body>
</html>