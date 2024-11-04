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
            <div class="row justify-content-center">
                <div class="col">
                <h1 class="text text-center">Create notes</h1>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row justify-content-center">
                <div class="col">
            <form action="{{route('notes.store')}}"method="post">
            @csrf
            <label for="">Content</label>
            <input type="text"content="Content">
            <br><br><br>

            <label for="">Title</label>
            <input type="text"title="Title">

            <br><br><br>

            <label for="">Subtitle</label>
            <input type="text"subtitle="Subtitle">
            <input type="submit" value="Create note" class="btn btn-sm btn-success">

        </form>

                </div>
            </div>
        </div>
        


    </body>