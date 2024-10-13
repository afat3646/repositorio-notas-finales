<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=deivece-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible"content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <h1>Create new user</h1>
        <form action="{{route('users.store')}}"></form>
        @csrf
        <label for="">name</label>
        <input type="name" name="Name">

        <br><br><br>

        <label for="">username</label>
        <input type="username" username="Username">
        <br><br><br>

        <label for="">Email</label>
        <input type="Email" Email="Email">

    <br>
    </body>
    </html>