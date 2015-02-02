<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Libro Libre :: México</title>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,200,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="foundation/css/foundation.css" />
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/general_style.css" />
    <script src="foundation/js/vendor/modernizr.js"></script>
</head>
<body>

<!-- <nav class="top-bar" data-topbar>

    <section class="top-bar-section">
        <ul class="right">
            <li><a href="#"> Quienes somos.</a></li>
            <li class="has-dropdown">
                <a href="#">About</a>
                <ul class="dropdown">
                    <li><a href="#">Contribute</a></li>
                    <li><a href="#">About Us</a></li>
                </ul>
            </li>
        </ul>
    </section>
</nav> -->

<div class="row text-center">
    <div class="large-12 columns">
        <img src = "img/logo.png" alt = "Logo Libro Libre" />
    </div>
</div>


<article class="text-left">
    <div class="row" style="text-align: center; border-top: solid 1px black; padding-top: 1em;">
        <div class="small-4 medium-4 large-4 columns">
            Haz feliz a otra persona con los libros que ya no necesitas.
        </div>
        <div class="small-4 medium-4 large-4 columns">
                Obtén libros que necesites.
        </div>
        <div class="small-4 medium-4 large-4 columns">
                Contribuye a mejorar la cultura de tu comunidad.
        </div>
    </div>
    <div class = "row">
        <div class="small-12 columns" id="explanation-container">
            <div id="explanation">
                Libro Libre es una comunidad en México, destinada a dar libros como regalo. El punto es que compartamos con las personas aquellos libros que ya no necesitaremos,
                que tenemos porque pensamos que algún día iban a servir o que sólo nos fueron útiles en su momento.
                </br>
                </br>
                Simplemente publica lo que tienes, nosotros nos encargaremos de dar seguimiento a lo que has compartido y eso te permitirá acceder a distintos
                beneficios, como otros libros que tal vez desees.
                </br>
                </br>
                <strong>Recuerda, hay más felicidad en dar que en recibir.</strong>
                </br>
                Regístrate aquí para avisarte cuando estemos listos.
                {{ Session::get('success_message')? '<div class="alert-box success radius">'.Session::get('success_message').'</div>' : '' }}
                {{ Form::open(['url' => '/user/subscribe']) }}
                    {{ Form::label('name','Nombre: ') }}
                    {{ Form::input('text','name') }}
                    <span class="error" style="padding:0">{{ $errors->first('name') }}</span>

                    {{ Form::label('email','Mail: ') }}
                    {{ Form::input('text','email') }}
                    <span class="error" style="padding:0">{{ $errors->first('email') }}</span>

                    {{ Form::submit('Suscribirme',["class" => 'button']) }}
                {{ Form::close() }}
            </div>
        </div>
    </div>

</article>


<script src="foundation/js/vendor/jquery.js"></script>
<script src="foundation/js/foundation.min.js"></script>
<script>
    $(document).foundation();
    $(document).ready(function(){
        h = $(window).height();
        $("body").height(h);
    });
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', '{{ $analytics_code }}', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>
