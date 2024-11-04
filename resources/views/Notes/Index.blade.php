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
            <h1 class="text text-center">All notes</h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-6 text-end">
        <a href="{{route('notes.create')}}" class="btn btn-primary btn-sm">Create new note</a>

        </div>
    </div>
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6">
            <table class="table table-striped">
            <thead>
                <tr>
                    
                    <th>Content</th>
                    <th>Title</th>
                    <th>Subtitle</th>
                </tr>

            </thead>
            <tbody>
                @foreach ($notes as $note)
                <tr>
                <br><td>{{$note->Content}}</td>
                <br><td>{{$note->Title}}</td>
                <br><td>{{$note->Subtitle}}</td>
                
                </tr>
                <td>
                    <a href="{{route('notes.show', $note->Content)}}"method="post"class="btn btn-sm btn-secondary">See content</a>
                    <a href="{{route('notes.edit', $note->Title)}}"method="post"class="btn btn-sm btn-warning">Edit note</a>
                </td>
                <td>
                <form action="{{route('notes.destroy', $note->id)}}"method="post">
                    @csrf
                    @method('delete')
                    <input type="submit"value="Delete note"class="btn btn-sm btn-danger">
                </form>
                </td>
                @endforeach
            </tbody>
        </table>
            </div>
        </div>
       
        
    </body>