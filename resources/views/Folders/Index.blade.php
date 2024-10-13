<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=deivece-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible"content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <h1>All folders</h1>
        <a href="{{route('folders.create')}}">Create new folder</a>
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    

                </tr>
            </thead>
            @foreach ($folders as $Folder)
            <tr>
                <br><td>{{$Folder->id}}</td>
                <br><td>{{$Folder->name}}</td>
                
                <br>

            </tr>
            
            @endforeach
        </table>

    </body>
</html>