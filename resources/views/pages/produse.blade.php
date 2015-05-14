@extends('default')

@section('includes')
    <link rel="stylesheet" href="css/flexisel.css" type="text/css" />
    <link rel="stylesheet" href="css/portfolio.css" type="text/css" />
@stop

@section('content')
    @if (isset($_GET['item']))
    <div class="row page-title">
        <h1>{{str_replace("_"," ",$_GET['item'])}}</h1>
    </div>
    <div class="row">
        <aside class="col-lg-3 col-md-3 hidden-sm hidden-xs">
            <h4>Produse</h4>
            <div class="sidebar">
            <?php $products = DB::table('products')->get(); ?>
            @foreach ($products as $product)
                <a href="./produse?category={{$product->prod_link}}">{{$product->prod_name}}</a>
            @endforeach
            </div>
        </aside>
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <?php $link_to_include = "./products/" . $_GET['category'] . "/" . $_GET['item'] . ".php"; ?>
            @if(File::exists($link_to_include))
                <?php include($link_to_include); ?>
            @else
                <h4 class="error">Ne pare rau, pagina produsului nu este terminata sau produsul nu exista.</h4>
            @endif
        </div>
    </div>
    
    @elseif (isset($_GET['category']))
    <?php $produs = DB::select('select * from products where prod_link = ?', [$_GET['category']])[0]; ?>
    
    <div class="row page-title">
        <h1>{{$produs->prod_name}}</h1>
    </div>
    <div class="row">
        <aside class="col-lg-3 col-md-3 hidden-sm hidden-xs">
            <h4>Produse</h4>
            <div class="sidebar">
            <?php $products = DB::table('products')->get(); ?>
            @foreach ($products as $product)
                <a href="./produse?category={{$product->prod_link}}">{{$product->prod_name}}</a>
            @endforeach
            </div>
        </aside>
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <?php $link_to_include = "./products/".(string)$produs->prod_link.".php";?>
            @if (File::exists($link_to_include))
                <?php include($link_to_include); ?>
            @else
                <h4 class="error">Ne pare rau, pagina produsului nu este terminata.</h4>
            @endif
        </div>
    </div>
    
    @else

    <div class="row page-title">
        <h1>Produse</h1>
    </div>
    <div class="row">
        <div id="portfoliolist">
        <?php $products = DB::table('products')->get(); ?>
        @foreach ($products as $product)
            <a href="./produse?category={{$product->prod_link}}">    
            <div class="portfolio">
                <div class="portfolio-wrapper">				
                    <img src="./img/products/{{$product->prod_image}}" alt="{{$product->prod_name}}" />
                    <div class="title">{{$product->prod_name}}</div>
                </div>
            </div></a>
        @endforeach
        </div>        
    </div>
    <div class="row no-padding-top">
        <div class="col-md-12">
            <h3>Parteneri</h3>
        </div>
        <div class="col-md-12">
            <ul id="flexisel"> 
                <li><a href="http://www.soitaab.com/" target="_blank"><img src="img/sponsors/soitaab.png" alt="Soitaab"/></a></li>   
                <li><a href="http://www.hypertherm.com/" target="_blank"><img src="img/sponsors/hypertherm.png" alt="Hypertherm"/></a></li>   
                <li><a href="http://www.taglio.it/" target="_blank"><img src="img/sponsors/taglio.png" alt="Taglio"/></a></li>   
                <li><a href="http://www.harris.com/" target="_blank"><img src="img/sponsors/harris.png" alt="Harris"/></a></li>   
                <li><a href="http://www.cebora.it/" target="_blank"><img src="img/sponsors/cebora.png" alt="Cebora"/></a></li>   
                <li><a href="http://www.tecnomagnete.com/" target="_blank"><img src="img/sponsors/tecnomagnete.png" alt="Tecnomagnete"/></a></li>   
                <li><a href="http://www.galdabini.it/" target="_blank"><img src="img/sponsors/galdabini.png" alt="Galdabini"/></a></li>   
            </ul>
        </div>
    </div>
        
    @endif
@stop

@section('scripts')
    <!-- Flexisel -->
    <script src="js/jquery.flexisel.js"></script>
    <script type="text/javascript">
        $(window).load(function() {
            $("#flexisel").flexisel({
                visibleItems: 5,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 2000,            
                pauseOnHover: true
            });
        });
    </script>
    <!-- Portfolio -->
    <script type="text/javascript" src="js/jquery.easing.min.js"></script>	
    <script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
    <script type="text/javascript">
        $(function () {
                var filterList = {
                        init: function () {
                                // MixItUp plugin
                                // http://mixitup.io
                                $('#portfoliolist').mixitup({
                                        targetSelector: '.portfolio',
                                        filterSelector: '.filter',
                                        effects: ['fade'],
                                        easing: 'snap',
                                        // call the hover effect
                                        onMixEnd: filterList.hoverEffect()
                                });				
                        },
                        hoverEffect: function () {
                                /* Simple parallax effect
                                $('#portfoliolist .portfolio').hover(
                                        function () {
                                                $(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
                                                $(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
                                        },
                                        function () {
                                                $(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
                                                $(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
                                        }		
                                );	*/			
                        }
                };
                // Run the show!
                filterList.init();
        });		
    </script>
@stop


    