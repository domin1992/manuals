<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Manuals</title>

        <link rel="stylesheet" href="/plugins/bootstrap-3.3.7-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/front.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <a href="http://zencore.pl" target="_blank">
                            <img src="/img/logo.png" class="img-responsive" alt="Zencore">
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <main>
            @yield('content')
        </main>
        <script src="/plugins/jQuery/jquery-2.2.3.min.js"></script>
        <script src="/plugins/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    </body>
</html>