<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>chronicbook</title>
    </head>
    <body class="antialiased">
            <h1>bonjour tous chronicbook</h1>
            <p> la date d'aujourdhuit est {{ date ('d/m/y') }}</p>

            <footer>
                <p>&copy; copyright 2022 &middot;</p>
            </footer>
    </body>
</html>
