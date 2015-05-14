<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="S.C. TECNO EUROMAG s.r.l. are ca principal obiectiv importul, comercializarea si instalarea de echipamente industriale, orientandu-se de la innceput spre gasirea de solutii personalizate la cerintele clientilor." />
    <meta name="keywords" content="Debitare , Hypertherm , Masini de debitat , Plasma , Oxigaz , Consumabile , taiere , CAD , CAM , aspiratie , soitaab , tecnoeuromag , europa cut solutii , europa , cut , solutii , service , SAF , ductil" />
    <meta name="author" content="SC Tecno Euromag srl" />
    <title>
        @if(isset($_GET['item']))
            {{str_replace("_" , " " , $_GET['item'])}}
        @elseif(isset($_GET['category']))
            {{str_replace("_" , " " , $_GET['category'])}}
        @else
            Tecnoeuromag
        @endif
    </title>
    <link rel="icon" href="{{{ asset('img/favicon.ico') }}}" sizes="16x16">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href="css/style.css" rel="stylesheet">
    @yield('includes')
</head>

<body>
<div class="container">
    <header>
        <div class="top-bar row">
            <div class="col-md-12">
                <span><i class="fa fa-phone"></i>0238 719734 </span>
                <span><i class="fa fa-envelope-o"></i>office@tecnoeuromag.ro </span>
                <a class="pull-right" href="https://www.facebook.com/tecnoeuromag" target="_blank">
                    <img src="img/findonfacebook.png" alt="Ne gasiti pe facebook">
                </a>
            </div>
        </div>
        <div class="row">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="./"><img src="img/logo.jpg" alt="Logo TecnoEuromag"></a>
                </div>
                
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="./"><i class="fa fa-home"></i> Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-folder-open-o"></i> Produse <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="./produse">VEZI TOATE PRODUSELE</a></li>
                                <li class="divider"></li>
                                <?php $products = DB::table('products')->get(); ?>
                                @foreach ($products as $product)
                                    <li><a href="./produse?category={{$product->prod_link}}">{{$product->prod_name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="./promotii"><i class="fa fa-star-o"></i> Promotii</a></li>
                        <li><a href="./contact"><i class="fa fa-envelope-o"></i> Contact</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </div>
    </header>
    <div class="content">
        @yield('content')
    </div>
    <footer class="row">
        <div class="col-md-4">
            <h4>Despre noi</h4>
            <p>S.C. TECNO EUROMAG s.r.l. are ca principal obiectiv importul, comercializarea si instalarea de echipamente industriale, orientandu-se de la inceput spre gasirea de solutii personalizate la cerintele clientilor.</p>
        </div>
        <div class="col-md-4">
            <h4>Produse</h4>
            <p>
                <a href="./produse" class="btn btn-success">Masini automate CNC</a>
                <a href="./produse" class="btn btn-success">Sisteme de ridicare</a>
                <a href="./produse" class="btn btn-success">Sisteme de aspiratie</a>
                <a href="./produse" class="btn btn-success">Plasme taiere</a>
                <a href="./produse" class="btn btn-success">Software</a>
                <a href="./produse" class="btn btn-success">Consumabile</a>
                <a href="./produse" class="btn btn-success">Pistolete sudura</a>
                <a href="./produse" class="btn btn-success">Echipamente de sudura</a>
                <a href="./produse" class="btn btn-success">Prese hidraulice</a>
                <a href="./produse" class="btn btn-success">Compresor cu surub</a>
            </p>
        </div>
        <div class="col-md-4">
            <h4>Contact</h4>
            <ul>
                <li><i class="fa fa-home"></i> Sediul Central: Strada Morilor, Nr. 39, Galati</li>
                <li><i class="fa fa-map-marker"></i> Punct de lucru: Buzau, Str. Aleea Industriilor, Nr.5</li>
                <li><i class="fa fa-phone"></i> Tel-Fax: +40 238 719734</li>
                <li><i class="fa fa-envelope-o"></i> E-mail: office@tecnoeuromag.ro</li>
            </ul>
        </div>
    </footer>
</div><!-- /.container -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    @yield('scripts')
</body>
</html>
