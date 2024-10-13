<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=deivece-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible"content="ie=edge">
        <title>Document</title>
    </head>

    <body>
        <h1>Create notes</h1>
        <form action="{{route('notes.store')}}" method"post">
            @csrf
            <label for="">Content</label>
            <input type="text"content="Content">
            <br><br><br>

            <label for="">Title</label>
            <input type="text"title="Title">

            <br><br><br>

            <label for="">Subtitle</label>
            <input type="text"subtitle="Subtitle">

        </form>


    </body>