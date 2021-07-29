<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Todo create</title>

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
            <a href="todo_show"> Back </a><br/>
            <form method="POST" action="todo_submit">
            @csrf
                <table>
                    <tr> 
<td> Name </td>
<td><input type="textbox" name="name" required value="{{$todoArr->name}}"/></td>
        </tr>

        <tr> 
<td> submit </td>
<td><input type="submit" name="submit"/>
</td>
        </tr>
        </table>
        </div>
    </body>
</html>
