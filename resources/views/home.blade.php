<?php
$arrMenu = ['Europe', 'Africa', 'Asia', 'North America', 'South America', 'Antartica'];
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello World</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <style>

        </style>
    </head>
    <body>
        <section class="nav">
            <nav>
                <ul>
                    @@foreach ($arrMenu as $item)
                    <li>{{$item}}</li>
                    @endforeach
                </ul>
            </nav>
        </section>
        <h1>HELLO WORLD</h1>
    </body>
</html>
