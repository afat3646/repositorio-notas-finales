<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Update Note</h1>
    <form action="{{route('notes.update',$notes->id)}}" method="post">
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

        <input type="submit" value="Update Note">

    </form>
</body>
</html>