<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=deivece-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible"content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <h1>All notes</h1>
        <a href="{{route('notes.create')}}">Create new note</a>
        <table>
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
                
                @endforeach

            </tbody>
        </table>
    </body>