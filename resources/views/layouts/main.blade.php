<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="ytf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>

<body>
    <table style="display: flex" style="flex-direction: row">
        <tr>
            <td style="border: 50px solid white" style="padding: 10px"><h1><a href="/">Home</a></h1></td>
            <td style="border: 50px solid white" style="padding: 10px"><h1><a href="/events/create">Create</a></h1></td>
            <td style="border: 50px solid white" style="padding: 10px"><h1><a href="/events/read">Read</a></h1>
            <td style="border: 50px solid white" style="padding: 10px"><h1><a href="#">Update</a></h1></td>
            <td style="border: 50px solid white"><h1><a href="#">Delete</a></h1></td>
            @auth
                <td>
                    <form action="/logout" method="POST">
                        @csrf
                        <h1>
                            <a href="/logout"
                                onclick="event.preventDefault();this.closest('form').submit();">
                                Sair
                            </a>
                        </h1>
                    </form>
                </td>
            @endauth

        </tr>
        @guest
            <tr>
                <td style="border: 50px solid white"><h1><a href="/login">Login</a></h1></td>
                <td style="border: 50px solid white"><h1><a href="/register">Register</a></h1></td>
            </tr>
        @endguest
    </table>
        
    @yield('conteudo')

    <footer>
        
    </footer>
</body>
</html>