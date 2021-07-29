<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Todo</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <a href="todo_create"> Add Record </a><br/>
            {{session('msg')}}
            <table>
               <tr>
                   <td>Id</td> 
                   <td>Name</td> 
                   <td>Created At</td> 
                   <td>Action</td> 
        </tr>
        @foreach($todoArr as $todo)
        
        <tr>
                   <td>{{$todo->id}}</td> 
                   <td>{{$todo->name}}</td> 
                   <td>{{$todo->created_at}}</td> 
                   <td><a href="todo_delete/{{$todo->id}}">Delete</a></td> 
                   <td><a href="todo_edit/{{$todo->id}}">Edit</a></td> 
        </tr>
        @endforeach
        </table>
        </div>
    </body>
</html>
