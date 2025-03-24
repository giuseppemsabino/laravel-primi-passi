<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boiler</title>
</head>
<body>
     <header>
        <nav>
            <ul>
                <li>
                    <a href='{{route("home")}}'>Homepage</a>
                </li>
                <li>
                    <a href='{{route("about")}}'>About Us</a>
                </li>
                <li>
                    <a href='{{route("services")}}'>Services</a>
                </li>
            </ul>
        </nav>
     </header>
    <h1>Hello World</h1>

    <p>
        {{$first_text}}
    </p>
</body>
</html>