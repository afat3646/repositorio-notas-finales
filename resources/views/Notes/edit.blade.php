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
            <h1 class="text text-center">Update Note</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col"class="text text-center" >
        <form action="{{route('notes.update',$notes->id)}}" method="post"class="text text-center">
        @csrf
        @method('PATCH')

        <label for="">Title</label>
        <input type="text" name="Title" value="{{$notes->Title}}">
        <br><br>

        <label for="">Content</label>
        <input type="text" name="Content" value="{{$notes->Content}}">
        <br><br>

        <label for="">Subtitle</label>
        <input type="text" name="Subtitle" value="{{$notes->Subtitle}}">
        <br><br>

        <input type="submit" value="Update Note" class="btn btn-sm btn-success">

    </form>
            </div>
        </div>
    </div>
    
    
</body>
</html>