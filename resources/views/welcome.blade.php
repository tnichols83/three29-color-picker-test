<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Color Saver</title>
    </head>
    <body>
        <h1>Pick a Color</h1>
        <form action="#TODO" method="POST">
            <input type="color" name="color" value="#30AF30">
            <button>Add</button>
        </form>
        {{-- Put the listing here --}}
    </body>
</html>
