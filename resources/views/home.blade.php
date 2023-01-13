<?php
$arrMenu = ['europe', 'africa', 'asia', 'north-america', 'south-america', 'oceania', 'antartica'];
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
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            .navigation-bar {
                height: 3rem;
                background-color: blue
            }

            nav {
                height: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                width: 100%;
                height: 100%;
            }
            ul {
                height: 100%;
                display: flex;
                justify-content: space-between;
                gap: 2rem;
                list-style: none;
                text-transform: uppercase;
                font-weight: bold;
            }

            li{
                height: 100%;
                position: relative;
            }

            li:hover::before {
                content: '';
                position: absolute;
                bottom: 0;
                left: 0;
                width: 100%;
                height: 4px;
                background: goldenrod;
            }
            a{
                display: flex;
                align-items: center;
                height: 100%;
                color: white;
                text-decoration: none;
            }
            main {
                height: calc(100vh - 3rem);
                display: flex;
                justify-content: center;
                align-items: center;
                background-image: url('https://media.istockphoto.com/id/1334034329/photo/sunrise-and-shadow-on-the-earth-rotate-in-space-with-star-in-universe-world-realistic.jpg?b=1&s=170667a&w=0&k=20&c=eBf2w7ep4x4U-0U0l-M5e-ug-C5elX7fD8EGOtItgeI=');
                background-size: cover;
                background-position: center;
            }

            h1{
                background-color: black;
                color: white;
                font-size: 1rem;
                padding: .8rem 2rem;
            }
        </style>
    </head>
    <body>
        <section class="navigation-bar">
            <nav>
                <ul>
                    @foreach ($arrMenu as $item)
                      <li><a href={{"/$item"}}>{{$item}}</a></li>
                    @endforeach
                </ul>
            </nav>
        </section>
        <main>
            <h1>HELLO WORLD!</h1>
        </main>
    </body>
</html>
