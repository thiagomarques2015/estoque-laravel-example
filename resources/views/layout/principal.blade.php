<!DOCTYPE html>
<html>
    <head>
        <title>Controle de estoque</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/app.css" />
        <link rel="stylesheet" type="text/css" href="/css/custom.css" />
    </head>
    <body>

        <div class="container">

            <nav class="navbar navbar-default">
                <div class="container-fluid">

                <div class="navbar-header">      
                <a class="navbar-brand" href="/produtos">Estoque Laravel</a>
                </div>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/produtos">Listagem</a></li>
                    <li><a href="/produtos/novo">Novo</a></li>
                </ul>

                </div>
            </nav>

            @yield('conteudo')

            <footer class="footer">
                <p>© Curso de Laravel do Alura.</p>
            </footer>

        </div>

    </body>
    </html>